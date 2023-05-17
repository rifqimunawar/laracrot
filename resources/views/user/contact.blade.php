@section('title') {{ 'Contact' }}@endsection
@extends('user.layout')
@section('content')

<div class="container my-1 pt-4">
  <div class="row pt-4">
    
    
    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Hubungi kami jika anda membutuhkan informasi lebih mengenai PMII Komisariat Uninus Cabang Kota Bandung</p>
        </div>

        <div class="form">
          <form action="/contact/store" method="post" >
            @csrf
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              {{-- <div class="loading">Loading</div> --}}
            </div>
            <div class="text-center" ><button class="text-center btn btn-success" type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </div>
    </section><!-- End Contact Section -->
  </div>
</div>

@endsection