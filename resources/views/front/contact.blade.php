@extends('layouts.main')
@section('content')
<br/>
    <div class="row">
        <div class="small-6 small-centered columns">
      <form action="{{route('contact.store')}}" method="POST">
         {{csrf_field()}}
            
            <div class="form-row">
                <label>
                    <span>Name</span>
                    <input type="text" size="20">
                </label>
            </div>


        <div class="form-row">
                <label>
                    <span>Email</span>
                    <input type="email" size="50">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>How can we help?</span>
                    <textarea name="message" rows="10" cols="30"></textarea>
                </label>
            </div>
            


            <input type="submit" class="submit button success" value="Submit">
        </form>
        </div>
    </div>

       
            
        </a>
    </section>
    <br/>
    <div class="subheader text-center">

              Feel free to contact us!!!
              <h5>ADDITIONAL INFORMATION</h5>
                            <p><strong>Phone:</strong>&nbsp;9808957986<br>
                            <strong>Fax:</strong>&nbsp;+04 (123) 456-7860<br>
                            <strong>Email:</strong>&nbsp;<a href="#">Jananitheboutique@yahoo.com</a>                              
                            </p>
                           
        
    </div>

    <!-- Latest apparels -->
    <div class="row">
       
            
         
       
    </div>

    <!-- Footer -->
    <br>
@endsection