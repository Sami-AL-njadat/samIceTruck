   <div class="contact_sa  layout_padding">
       <div class="container">
           <div class="row">
               <div class="col-md-6" id="order">
                   <h1 class="about_taital">Contact us</h1>

                   <p class="about_text">Feel free to book and tell us what you’re looking for — we’ll get back to you
                       soon!</p>

                   <div class="contact_main">



                       @if (session()->has('success'))
                           <div class="alert alert-success">{{ session('success') }}</div>
                       @endif
                       @if (session()->has('error'))
                           <div class="alert alert-danger">{{ session('error') }}</div>
                       @endif

                       <form wire:submit.prevent="submitForm">
                           <div class="form-group">

                               <input type="text" id="name" wire:model="name" class="email-bt"
                                   placeholder="Your Name:">

                           </div>
                           <div>
                               @error('name')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror
                           </div>


                           <div class="form-group">

                               <input type="email" id="email" wire:model="email" class="email-bt"
                                   placeholder="Your Email:">

                           </div>
                           <div>

                               @error('email')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror
                           </div>
                           <div class="form-group">

                               <input type="phone" id="phone" wire:model="phone" class="email-bt"
                                   placeholder="Your Phone:">

                           </div>
                           <div>
                               @error('phone')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror
                           </div>
                           <div class="form-group">

                               <textarea id="message" wire:model="message" class="email-bt" placeholder="Tell us about your party details:"></textarea>

                           </div>
                           <div>
                               @error('message')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror
                           </div>




                           <div class="main_bt">
                               <button class="btn-submit" type="submit" wire:loading.attr="disabled">Send
                                   <img src="{{ asset('images/spinner.gif') }}" alt="Loading..." wire:loading
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
