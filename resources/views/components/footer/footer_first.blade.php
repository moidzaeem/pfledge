   <!-- ############################# CONTACT SECTION ########################### -->
   <div class="contact-container">
       <div class="row contact-row">
           <div class="col-lg-5">
               <span class="contact-top1">Kontakt</span>
               <div class="contact-top2">Wir sind für Sie da!</div>
               <div class="contact-top3">
                   Haben Sie Fragen zu unseren Dienstleistungen, benötigen Sie
                   Unterstützung oder möchten Sie einen Termin vereinbaren? Zögern Sie
                   nicht, uns zu kontaktieren.
               </div>
               <div class="contact-div">
                   <img src="{{ asset('assets/Images/Contact_email.svg') }}" alt="" />
                   <div class="contact-email">E-Mail <br />kontakt@pflegepur.de</div>
               </div>
               <div class="contact-div">
                   <img src="{{ asset('assets/Images/Contact_phone.svg') }}" alt="" />
                   <div class="contact-phone">Telefon <br />05151–7909862</div>
               </div>
               <div class="contact-div">
                   <img src="{{ asset('assets/Images/Contact_time.svg') }}" alt="" />
                   <div class="contact-time">
                       Mo. - Sa. 9:00 - 18:00 <br />Sonntag geschlossen
                   </div>
               </div>
           </div>
           <div class="col-lg-7 contact-right" id="contactFormTest">
               <form action="{{ route('contact.form') }}" method="POST" class="row">
                   @csrf
                   <div class="col-lg-6 pe-sm-0">
                       <input type="text" placeholder="lhr Name*" required />
                   </div>
                   <div class="col-lg-6 pe-sm-0">
                       <input type="email" name="" id="" placeholder="Ihre E-Mail*" required />
                   </div>
                   <div class="col-lg-6 pe-sm-0">
                       <input type="tel" placeholder="Ihre Telefonnummer" />
                   </div>
                   <div class="col-lg-6 pe-sm-0">
                       <input type="text" placeholder="Ihre Stadt" />
                   </div>
                   <div class="col-12 pe-sm-0">
                       <textarea name="" id="" placeholder="Ihre Nachricht*" rows="6" required></textarea>
                   </div>
                   <div class="col-12">
                       <div class="row ps-2 captcha-main-row">
                           {{-- <div class="col-lg-8 captcha-div p-0">
                               <div class="captcha-sub-div" style="width: 45%; display: flex">
                                   <div style="width: 80%">
                                       <img style="
                                                width: 100%;
                                                height: 100%;
                                                display: block;
                                                object-fit: cover;
                                                border-top-left-radius: 10px;
                                                border-bottom-left-radius: 10px;"
                                           src="{{ asset('assets/Images/contact_captcha.svg') }}" alt="" />
                                   </div>
                                   <button style="width: 20%" class="captcha-refresh-btn" type="button">
                                       <img src="{{ asset('assets/Images/Captcha_refresh_btn.svg') }}" alt="" />
                                   </button>
                               </div>
                               <textarea name="" id="" placeholder="Geben Sie hier den Code ein!"></textarea>
                           </div> --}}
                           <div class="col-lg-4 contact-submit-btn-div pe-0 text-end">
                               <button class="contact-submit-btn" type="submit">
                                   Nachricht senden
                               </button>
                           </div>
                       </div>
                   </div>
               </form>
           </div>
       </div>
   </div>
