<footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <span class="sitename">{{ $data_page->footer_title }}</span>
          </a>
          <p>{{ $data_page->footer_subtitle }}</p>

          @if( $data_page->icon_1!='' || $data_page->icon_2!='' || $data_page->icon_3!='' || $data_page->icon_4!='' || $data_page->icon_5!='' )
            <div class="social-links d-flex mt-4">
                @if($data_page->icon_1!='')
                  <a href="{{ $data_page->icon_1_url }}"><i class="{{ $data_page->icon_1 }}"></i></a>
                @endif

                @if($data_page->icon_2!='')
                  <a href="{{ $data_page->icon_2_url }}"><i class="{{ $data_page->icon_2 }}"></i></a>
                @endif

                @if($data_page->icon_3!='')
                  <a href="{{ $data_page->icon_3_url }}"><i class="{{ $data_page->icon_3 }}"></i></a>
                @endif

                @if($data_page->icon_4!='')
                  <a href="{{ $data_page->icon_4_url }}"><i class="{{ $data_page->icon_4 }}"></i></a>
                @endif

                @if($data_page->icon_5!='')
                  <a href="{{ $data_page->icon_5_url }}"><i class="{{ $data_page->icon_5 }}"></i></a>
                @endif
            </div>
          @endif
        </div>

      @if( $data_page->name_url_1!='' || $data_page->name_url_2!='' || $data_page->name_url_3!='' || $data_page->name_url_4!='' || $data_page->name_url_5!='' )
        <div class="col-lg-2 col-6 footer-links">
          <h4>{{ $data_page->heading_1 }}</h4>
          <ul>
          @if($data_page->name_url_1!='')
            <li><a href="{{ $data_page->url_1 }}">{{ $data_page->name_url_1 }}</a></li>
          @endif
          
          @if($data_page->name_url_2!='')
            <li><a href="{{ $data_page->url_2 }}">{{ $data_page->name_url_2 }}</a></li>
          @endif

          @if($data_page->name_url_3!='')
            <li><a href="{{ $data_page->url_3 }}">{{ $data_page->name_url_3 }}</a></li>
          @endif

          @if($data_page->name_url_4!='')
            <li><a href="{{ $data_page->url_4 }}">{{ $data_page->name_url_4 }}</a></li>
          @endif  

          @if($data_page->name_url_5!='')
            <li><a href="{{ $data_page->url_5 }}">{{ $data_page->name_url_5 }}</a></li>
          @endif

          </ul>
        </div>
      @endif
        
        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>{{ $data_page->heading_2 }}</h4>
          <p>{{ $data_page->alamat }}</p>
          <p>{{ $data_page->country }}</p>
          <p class="mt-4"><strong>No Telepon:</strong> <span>{{ $data_page->no_telepon }}</span></p>
          <p><strong>Email:</strong> <span>{{ $data_page->email }}</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p> <span>Copyright 2024</span> <strong class="px-1 sitename"></strong> <span></span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        <a href="https://bootstrapmade.com/"></a>
      </div>
    </div>

  </footer>