<div class="col-lg-8">
            @if(session()->get('success'))
              <div class="text-success">{{ session()->get('success') }}</div>
            @endif

            @if(session()->get('error'))
              <div class="text-danger">{{ session()->get('error') }}</div>
            @endif

            <form action="{{ route('contact_send_email') }}" method="POST" data-aos="fade-up" data-aos-delay="200">
              @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nama" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subjek" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="comment" rows="6" placeholder="Pesan" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <button type="submit">Kirim Pesan</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->