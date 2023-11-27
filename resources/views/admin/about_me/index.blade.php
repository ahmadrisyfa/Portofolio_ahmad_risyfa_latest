@extends('template.admin.index')
@section('content_admin')
<div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Form About Me</h5>
        @if(session()->has('berhasil'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              <i class="bi bi-check-circle me-1"></i>
                      {{ session('berhasil') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif 
        <!-- Vertical Form -->
        <form class="row g-3" method="POST" action="{{url('admin/about_me/create')}}" enctype="multipart/form-data">
            @csrf
          <div class="col-12">
            <label for="inputNanme4" class="form-label">Your Job</label>
            <input value="{{ !empty($data->your_job) ? $data->your_job : '' }}" name="your_job" type="text" class="form-control required">
          </div>
          <div class="col-12">
            <label for="inputEmail4" class="form-label">Description</label>
            <textarea name="description" class="form-control required">{{ !empty($data->description) ? $data->description : ''}}</textarea>
          </div>
          {{-- <input type="hidden"class="mb-3 mt-3" name="oldImage" value="{{ !empty($data->picture) ? $data->picture : ''}}"> --}}
          <p class="gambar_baru"></p>
          <img src="" class="img-preview" alt="" style="width: 200px">
          <label for="inputPassword4" class="form-label">{{ !empty($data->picture) ? 'Picture  Old' : '' }}</label>
          <img src="{{!empty($data->picture) ? asset('storage/' . $data->picture) : '' }}" style="width: 200px">
          <div class="col-12">
            <label for="inputPassword4" class="form-label">Picture</label>
            <input name="picture" type="file" class="form-control" onchange="previewImage()" id="gambar">
          </div>
          <div class="col-12">
            <label for="inputPassword4" class="form-label">Name</label>
            <input value="{{!empty($data->name) ? $data->name : ''}}" name="name" type="text" class="form-control required">
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Title</label>
            <input value="{{!empty($data->title) ? $data->title : ''}}" name="title" type="text" class="form-control required" >
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Phone</label>
            <input value="{{!empty($data->phone) ? $data->phone : ''}}" name="phone" type="number" class="form-control required" >
          </div>
          <div class="col-12">
            <label for="inputEmail4" class="form-label">Address</label>
            <textarea name="address" class="form-control required">{{!empty($data->address) ? $data->address : ''}}</textarea>
          </div>
          <div class="col-12">
            <label for="inputEmail4" class="form-label">Birthday</label>
            <input value="{{!empty($data->birthday) ? $data->birthday : ''}}" name="birthday" type="text" class="form-control required" >            
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Experience</label>
            <input value="{{!empty($data->experience) ? $data->experience : ''}}" name="experience" type="text" class="form-control required" >
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Email</label>
            <input value="{{!empty($data->email) ? $data->email : ''}}" name="email" type="email" class="form-control required" >
          </div>          
          <div class="col-12">
            <label for="inputAddress" class="form-label">Frellance</label>
            <input value="{{!empty($data->frellance) ? $data->frellance : ''}}" name="frellance" type="text" class="form-control required" >
          </div>
          <div class="text-center">
              <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </form><!-- Vertical Form -->

      </div>
    </div>
    <script>
  function previewImage() {
    const gambar = document.querySelector('#gambar');
    const imgpreview = document.querySelector('.img-preview');
    const gambar_baru = document.querySelector('.gambar_baru');

    imgpreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]);

    oFReader.onload = function(oFREvent) {
      imgpreview.src = oFREvent.target.result;
      // Set teks di atas gambar
      gambar_baru.textContent = "Picture New";
    }
  }
</script>

@endsection