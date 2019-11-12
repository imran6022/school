@extends('master.app')

@section('content')
<div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="notice">
                  <h3><span>Notice</span> Board</h3>
                      <div data-spy="scroll" class="nots" data-offset="0">
                        <ul class="list-group">
                          @foreach($notices as $notice)
                            <li class="list-group-item">
                              <a href="{{ route('notice.view', $notice->id) }}" target="_blabk">
                                <img src="{{ asset('images/notice/'. $notice->notice) }} " alt="PDF-" height="70px" width="100px">
                                {{ $notice->title }}<br>
                                {{ $notice->created_at->toDatestring() }}
                              </a>
                            </li>
                          @endforeach
                        </ul>
                      </div>
                </div>
               
              </div>
              <div class="col-md-6">
                <div class="about">
                  <h3 class="text-center">About <span>School</span></h3>
                  <p class="text-justify">Cambrian schools & college are committed to provide intellectual, social, cultural and economic benefits to communities through programs of education, co-curriculum activities, research and scholarships. Our schools & colleges are delivering world class education and research in the national education system of Bangladesh. Moreover, it has been involved in the next practice in the form of world citizenship education and makes an innovative and creative system for smart and enlightened generation. <br>

                  Our mission is to produce highly skilled manpower, visionary leaders and enlightened citizens..</p>
                </div>
              </div>
              <div class="col-md-3">
                 <div class="president mb-3">
                    <h3><span>Message</span> Corner</h3>
                    <div class="card mt-3" style="width: 16rem;">
                      <img src="{{ asset('images/imran1.jpg') }}" class="card-img-top img-fluid" alt="...">
                      <div class="card-body">
                        <h5 class="card-title text-center">সভাপতি</h5>
                        <p class="card-text text-center">ইউনাইটেড মাধ্যমিক বিদ্যালয়, বাঁশগ্রাম</p>
                      </div>
                    </div>
                </div>
              </div>
            </div>

            <div class="choosse">
          <div class="container">
              <div class="whychoose">
                <h3 class="text-center mt-4 mb-4">Why<span class="red"> Choose</span> Us</h3>
                  <div class="row">
                    <div class="col-md-3 mt-3">
                      <div class="card" style="width: 16rem;">
                        <div class="card-body text-center">
                          <p><i class="fa fa-user"></i></p>
                          <h4 class="card-title mt-3"><b>অভিজ্ঞ শিক্ষক</b></h4>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3 mt-3">
                      <div class="card" style="width: 17rem;">
                        <div class="card-body text-center">
                          <p><i class="fa fa-desktop"></i></p>
                          <h4 class="card-title mt-3"><b>আধুনিক বিজ্ঞানাগার</b></h4>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3 mt-3">
                      <div class="card" style="width: 16rem;">
                        <div class="card-body text-center">
                          <p><i class="fa fa-university"></i></p>
                          <h4 class="card-title mt-3"><b>স্মার্ট ক্লাসরুম</b></h4>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3 mt-3">
                      <div class="card" style="width: 16rem;">
                        <div class="card-body text-center">
                          <p><i class="fa fa-book"></i></p>
                          <h4 class="card-title mt-3"><b>সমৃদ্ধ লাইব্রেরি</b></h4>
                        </div>
                      </div>
                    </div>

                  </div>
              </div>
          </div>
        </div>

        <div class="choosse">
          <div class="container">
              <div class="whychoose">
                <h3 class="text-center mt-4 mb-4">Why<span class="red"> Choose</span> Us</h3>
                  <div class="row">
                    <div class="col-md-3 mt-3">
                      <div class="card" style="width: 16rem;">
                        <div class="card-body text-center">
                          <p><i class="fa fa-user"></i></p>
                          <h4 class="card-title mt-3"><b>অভিজ্ঞ শিক্ষক</b></h4>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3 mt-3">
                      <div class="card" style="width: 17rem;">
                        <div class="card-body text-center">
                          <p><i class="fa fa-desktop"></i></p>
                          <h4 class="card-title mt-3"><b>আধুনিক বিজ্ঞানাগার</b></h4>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3 mt-3">
                      <div class="card" style="width: 16rem;">
                        <div class="card-body text-center">
                          <p><i class="fa fa-university"></i></p>
                          <h4 class="card-title mt-3"><b>স্মার্ট ক্লাসরুম</b></h4>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3 mt-3">
                      <div class="card" style="width: 16rem;">
                        <div class="card-body text-center">
                          <p><i class="fa fa-book"></i></p>
                          <h4 class="card-title mt-3"><b>সমৃদ্ধ লাইব্রেরি</b></h4>
                        </div>
                      </div>
                    </div>

                  </div>
              </div>
          </div>
        </div>
        
    </div>
@endsection