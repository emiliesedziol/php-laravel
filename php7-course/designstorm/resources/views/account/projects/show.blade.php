@extends('layouts/account')

@section('title')
  Account dashboard
@endsection

@section('content')

<div>
  <div class="row">
    <div class="col-md-10">
      <h1>Website</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box">
          <div class="row">
            <div class="col-md-10">
                  <div class="img-section">
                    <div class="row">
                          <div class="col-md-3">
                            <div class="box">
                              <div style="position: relative; background: url('https://mir-s3-cdn-cf.behance.net/projects/404/35f74464796667.Y3JvcCw4MTAsNjM0LDAsMA.png') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px;">
                            </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="box">
                              <div style="position: relative; background: url('https://mir-s3-cdn-cf.behance.net/projects/404/35f74464796667.Y3JvcCw4MTAsNjM0LDAsMA.png') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px;">
                            </div>
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="box">
                              <div style="position: relative; background: url('https://mir-s3-cdn-cf.behance.net/projects/404/35f74464796667.Y3JvcCw4MTAsNjM0LDAsMA.png') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px;">
                            </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="box">
                              <div style="position: relative; background: url('https://mir-s3-cdn-cf.behance.net/projects/404/35f74464796667.Y3JvcCw4MTAsNjM0LDAsMA.png') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px;">
                            </div>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <center>
                              <a href="/account/project/id/edit" class="edit-btn">Edit</a>
                              <a href="/account/project/id/delete" onclick="confirm()" class="delete-btn">Delete</a>
                            </center>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
<script>

</script>

@endsection
