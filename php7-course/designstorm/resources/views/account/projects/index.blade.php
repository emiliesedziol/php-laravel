@extends('layouts/account')



@section('title')
  Account dashboard
@endsection

@section('content')

<div>
  <h1>Projects</h1>
  <h6>This is were you projects are located</h6>
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="row">
          <div class="col-md-10">
            All of the projects
          </div>
          <div class="col-md-2">
            <a href="/projects/create">Add New Project</a>
          </div>
        </div>
          <div class="row">
            <div class="col-md-10">

              <table>
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Websites</td>
                    <td><a href="/projects/id/edit" class="edit-btn">Edit</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div
        </div>
      </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
<script>

</script>

@endsection
