   <div class="contact_sa  layout_padding">
       <div class="container">
           <div class="row">
               <div class="col-md-6">
                   <h1 class="about_taital">Contact Us</h1>

                   <p class="about_text">Please contact with us any times</p>

                   <div class="contact_main">
                       @if (session()->has('success'))
                           <div class="alert alert-success">
                               {{ session('success') }}
                           </div>
                       @endif

                       <form wire:submit.prevent="submitForm">
                           <div class="form-group">

                               <input type="text" id="name" wire:model="name" class="email-bt"
                                   placeholder="Name">

                           </div>
                           <div>
                               @error('name')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror
                           </div>


                           <div class="form-group">

                               <input type="email" id="email" wire:model="email" class="email-bt"
                                   placeholder="Email">

                           </div>
                           <div>

                               @error('email')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror
                           </div>
                           <div class="form-group">

                               <input type="phone" id="phone" wire:model="phone" class="email-bt"
                                   placeholder="Phone">

                           </div>
                           <div>
                               @error('phone')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror
                           </div>
                           <div class="form-group">

                               <textarea id="message" wire:model="message" class="email-bt" placeholder="Message"></textarea>

                           </div>
                           <div>
                               @error('message')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror
                           </div>

                    


                           <div class="main_bt">
                               <button class="btn-submit" type="submit" wire:loading.attr="disabled">
                                   Submit
        <img  src="{{ asset('images/spinner.gif') }}" alt="Loading..." wire:loading
                                       class="loading-spinner">
                             
                               </button>
                           </div>


                       </form>
                   </div>
               </div>


               <div class="col-md-6">
                   <div class="countactus_img"><img src="images/side6.png" loading="lazy"></div>


               </div>
           </div>
       </div>
   </div>
