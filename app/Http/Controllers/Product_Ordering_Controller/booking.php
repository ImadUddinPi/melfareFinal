<?php
namespace App\Http\Controllers\Product_Ordering_Controller;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller; 
    use App\Models\Products;
    use Illuminate\Support\Facades\Cookie;
    use Session;
    use Illuminate\Support\Facades\Validator;
    use App\Models\Coupen_Code;
    use App\Models\Order;
    use Illuminate\Support\Facades\Auth;
    use Mail;


    class booking    extends Controller
    {
        public function opencheckoutpage()
        {
           
            return view('Product-Order-Screens.checkout');
        }
        public function Shipping_Payment_Screen()
        {
           
            return view('Product-Order-Screens.Shipping_Payment_Screen');
        }
        public function apply_promo_code(Request $request)
        {

                $promo_code = $request->input('promo_code');
               // $Coupen_Code=Coupen_Code::find($promo_code);
                
                
                if($Coupen=Coupen_Code::where('code',$promo_code)->first())
                {
                     
                    session(['promocode' => $Coupen->code]);
                    session(['discount' =>$Coupen->discount ]);
                    session(['message' =>'% Promo Code Applied Succesfully' ]);
                    session()->reflash();   
                  
                    
                    return back();
                }
                else
                {
                    //die 
                    
                return back()->with('invalid','You Entered Invalid Promo Code');
                }
            
        }
        public function  order_proceed(Request $request)
        {
              $validation =$request->validate([
                      'Door_No'=>'required|max:60',
                      'LandMark'=>'required|max:60',
                      'city'=>'required|max:60|regex:/^[a-zA-Z\s]*$/',
                      'state'=>'required|max:60|regex:/^[a-zA-Z\s]*$/',
                      'pincode'=>'required|digits_between:4,10',
                      'mno'=>'required|digits:10',
                    
                       'alternativemno'=>'nullable|digits:10',
                      'country'=>'required|max:30|regex:/^[a-zA-Z\s]*$/',
                // 'MobileNumber'=>'required|numeric',
                 
                ]);
                  print_r($validation);
               
                /* Delivery Details*/
                $address1=$request->input('Door_No');
                $address2=$request->input('LandMark');
                $city=$request->input('city');
                $state=$request->input('state');
                $pincode=$request->input('pincode');
                $mno=$request->input('mno');
                $alternativemno=$request->input('alternativemno');
                
                $country=$request->input('country');
                
               
                        

                $Delivery_Address=$address1.','.$address2.'<br>'.$city.','.$state.','.$country.'<br>'.$pincode.','.$mno.','.$alternativemno;
             /* Delivery Details*/
                $p_method='COD';
            /* Order Details Starts Here*/
                if(session('cart'))
                {
                    $total=0;$count=0;$order_details='';$delivery_charges=0;                    
                    foreach (session('cart') as $id => $details) 
                    {
                        $count=$count +1 ;
                        $total += $details['Final_Price'] * $details['item_quantity'];
                        $order_details=$order_details.'<br>'.
                        ('Product Name:'.$details["item_name"].', Quantity: '.$details["item_quantity"].
                        '<br> Price:'.$details["Final_Price"]);
                        $delivery_charges = $delivery_charges + $details['delivery_charges'] ;
                    }
                
                }
                if(session('promocode'))
                {
                    $promocode=session('promocode');
                    $Amount = $total + $delivery_charges - session('discount') * $total / 100;
                }
                else
                {
                    $promocode=null;
                    $Amount = $total + $delivery_charges;
                }
                $O_Details=$order_details;
                $Email_Id=Auth::user()->email;
                $loginid=$Email_Id;
                $name=Auth::user()->name;
            /*Order Details Ends Here*/
                 $Order = new Order();
                 $Order->Customer_Emailid=$Email_Id;
                 $Order->Delivery_Address=$Delivery_Address;
                 $Order->Order_Details=$O_Details;
                 $Order->Coupen_Code=$promocode;
                 $Order->Amount=$Amount;
                 $Order->paymentmode=$p_method;
                 $Order->save();       
                 $id=$Order->id;
                
                 if($p_method=='Online')
                 {
                    return redirect("proceed_to_Payment/$id");
                 }
                 else
                 {
                   
    	               
                    
                            Session::forget('cart');
                            Session::forget('discount');
                            Session::forget('promocode');
                            session()->flash('success', 'Session data  is Cleared');
                              
                  
                    return redirect("/Orders")->with('status','Order Placed Succesfully!');                  
                 }
                
        }
       
        
        
    }