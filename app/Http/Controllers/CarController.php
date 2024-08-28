<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Buyer;
use App\Mail\ContactUs;
use App\Models\Contact;

use Mail;

class CarController extends Controller
{
    //homepage
    public function mainpage(){
        $cars = Car::wheredoesntHave('buyer')->get();
        return view('homepage', compact('cars'));
    }

    //Car Detail page
    public function secondpage()
    {
        $cars = Car::wheredoesntHave('buyer')->get();
        return view('portfolio-details' , compact('cars'));
    }

    //Pass car Information to car detail page
    public function show($id)
    {
        // Retrieve the car details based on the provided name
        $car = Car::where('id', $id)->first();

        // Pass the car details to the view
        if($car){
            return view('portfolio-details', compact('car'));
        }
        return redirect('/');
    }

//view wishlist page
    public function carwishlist(){
        return view('wishlist');
    }

    //add car detail to wishlist page
    public function addcartowishlist($id){
        $car = Car::findorfail($id);
        $wishlist = session()->get('wishlist',[]);
        if(isset($wishlist[$id])){
            $wishlist[$id]['quantity']++;
        }else{
            $wishlist[$id]= [
                "brand"=>$car->brand,
                "name"=>$car->name,
                "quantity"=>1,
                "price"=>$car->price,
                "description"=>$car->description,
                "image"=>$car->image,

            ];
        }

        session()->put('wishlist', $wishlist);
        return redirect()->back()->with('success', 'Car has been added to wishlist');
    }

public function deleteWishlist(Request $request)
{
    if($request->id) {
        $wishlist = session()->get('wishlist');
        if(isset($wishlist[$request->id])) {
            unset($wishlist[$request->id]);
            session()->put('wishlist', $wishlist);
        }

        return response()->json(['response' => 'success']);
    }
}

public function contact_us_submit(Request $request){
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string|max:255',
    ]);

    $newUser= new Contact();
    $newUser->name=$request->name;
    $newUser->email=$request->email;
    $newUser->subject=$request->subject;
    $newUser->message=$request->message;

    $newUser->save();

    $mailData = [
        'name' => $request->name,
    ];

    Mail::to($request->email)->send(new ContactUs($mailData));

    return back()->with('success', 'We have received your enquiries!');

}


//CRUD ADMIN

//Crud Main Page
public function main(){
    $cars = Car::wheredoesntHave('buyer')->get();

    return view('index', compact('cars'));
}

    public function create()
    {
        return view('create');
    }

    public function store(Request $request){
       $data = $request ->validate([
        'type'=>'required',
        'brand'=>'required',
        'name'=>'required',
        'price'=>'required|decimal:0,2',
        'description'=>'nullable',
        'maindescription'=>'nullable',
        'image'=>'array',
        'image.*'=>'nullable'
       ]);

        $newCar = new Car();
        $newCar->type = $request->type;
        $newCar->brand = $request->brand;
        $newCar->name = $request->name;
        $newCar->price = $request->price;
        $newCar->description = $request->description;
        $newCar->maindescription = $request->maindescription;

        $image_arr = array();
        foreach($request->image as $image){
            if ($image && $image->isValid()) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $path = public_path('assets/car_img/');
                $image->move($path, $filename);
                $image_arr[] = $filename;
            }
        }

        $newCar->image= json_encode($image_arr);
        $newCar->save();

        return redirect(route('car.index'));
    }

    public function edit(Car $car)
    {
        return view('edit',['car' => $car]);
    }

    public function update($car, Request $request)
    {
        $data = $request ->validate([
            'type'=>'required',
            'brand'=>'required',
            'name'=>'required',
            'price'=>'required|decimal:0,2',
            'description'=>'nullable',
            'maindescription'=>'nullable',
            'image'=>'nullable'
           ]);

           $car = Car::find($car);
           $car->type = $request->type;
           $car->brand = $request->brand;
           $car->name = $request->name;
           $car->price = $request->price;
           $car->description = $request->description;
           $car->maindescription = $request->maindescription;

           $temp_arr = array();
           foreach($request->image as $index => $image){
               if(is_file($image)){
                    $file = $image;
                    $filename = time().$index.'_'.$file->getClientOriginalName();
                    $file->move(public_path('assets/car_img'), $filename);
                    array_push($temp_arr, $filename);
                }
           }

           $existing_img = $car->image;
           foreach(json_decode($existing_img) as $exist_img){
            array_push($temp_arr, $exist_img);
           }

           $car->image= json_encode($temp_arr);
           $car->save();

           return redirect(route('car.index'))-> with('success', 'Information Update Successfully');

    }

    public function carImgDelete(Request $request){
        $car = Car::where('id', $request->id)->first();

        $images = json_decode($car->image);
        $selected_index = $request->index;

        $temp_arr = array();
        if(isset($images[$selected_index])){
            unset($images[$selected_index]);

            foreach($images as $image){
                array_push($temp_arr, $image);
            }

            $car->image = json_encode($temp_arr);
            $car->save();

            return response()->json(['success' => 'Image has been deleted.', 'test' => $images]);
        }
        else{
            return response()->json(['failed' => 'Failed to remove image.']);
        }

    }

    public function destroy(Car $car)
    {
        $car -> delete();
        return redirect(route('car.index'))-> with('success', 'Information Deleted Successfully');

    }

    public function add(Car $car)
    {
        return view ('create');
    }


    public function buyer()
    {
        $buyers = Buyer::all();
        return view('buyer', compact('buyers'));
    }

    public function createBuyer()
    {
        return view ('create-buyer');
    }

    // public function storeBuyer(Request $request)
    // {
    //     $data = $request ->validate([
    //         'name'=>'required',
    //         'car_id' => 'required|exists:cars,id', // Ensure car_id exists in the cars table
    //         'contact'=>'required',
    //         'email'=>'required',
    //        ]);



    //        $newBuyer = new Buyer();
    //        $newBuyer->name = $request->name;
    //        $newBuyer->car_id = $request->car_id;
    //        $newBuyer->contact = $request->contact;
    //        $newBuyer->email = $request->email;


    //        $newBuyer->save();

    //        return redirect(route('main.buyer'));
    // }

    public function editBuyer(Buyer $buyer)
    {
        return view('edit-buyer',['buyer' => $buyer]);
    }


    public function updateBuyer($buyer, Request $request)
    {
        $data = $request ->validate([
            'name'=>'required',
            'contact'=>'required',
            'email'=>'required',
           ]);

           $buyer = Buyer::find($buyer);
           $buyer->name = $request->name;
           $buyer->contact = $request->contact;
           $buyer->email = $request->email;



           $buyer->save();

           return redirect(route('main.buyer'))-> with('success', 'Information Update Successfully');

    }

    public function destroyBuyer(Buyer $buyer)
    {
        $buyer -> delete();
        return redirect(route('main.buyer'))-> with('success', 'Information Deleted Successfully');

    }

    public function buyerDetail(Buyer $buyer)
    {

        return view('buyer-detail');
    }

    public function showBuyerDetails($id)
{
    $buyer = Buyer::where('id', $id)->first();

    return view('buyer-detail', compact('buyer'));

}

     public function sellCar($carId, Request $request)
    {
        $car = Car::find($carId);
        if ($car) {
            $buyer = $car->buyer; // Access the buyer using the defined relationship

        }

        // Assume you are receiving the buyer information through the request
        $data = $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required',
        ]);

        // Create a new buyer
        $buyer = new Buyer();
        $buyer->car_id = $carId; // Use the $carId from the URL parameter
        $buyer->name = $data['name'];
        $buyer->contact = $data['contact'];
        $buyer->email = $data['email'];

        // Save the buyer
        $buyer->save();

        // Link the car to the buyer
        $car->buyer()->save($buyer);
        $car->save();

        // Redirect or return a response
        return redirect('buyer')->with('success', 'Car sold successfully!');
    }

    public function sold()
    {
        $cars = Car::whereHas('buyer')->get();
        return view('sold', compact('cars'));
    }

    public function showContact()
    {
        return view('contact');
    }


    public function viewUser()
    {
        $users = Contact::all();

        return view('user',compact('users'));
    }

    public function destroyUser(Contact $user)
    {
        $user -> delete();
        return redirect(route('view.user'))-> with('success', 'Information Deleted Successfully');


    }

    public function getTotalCarsData()
    {
        $totalCars = Car::count(); // Get the total count of cars
        $totalSoldCars = Car::has('buyer')->count(); // Get the count of sold cars
        $availableCars = $totalCars - $totalSoldCars; // Calculate the available cars

        return [
            'totalCars' => $totalCars,
            'totalSoldCars' => $totalSoldCars,
            'availableCars' => $availableCars, // Pass the available cars count

        ];
    }




}
