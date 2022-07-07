@extends('admin.layout.app')

@section('container')
    
  
@include('admin.layout.navbar')



<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add Pages</h4>

              
              <form class="forms-sample" method="post" action="{{route('page.add')}}" >
                  @csrf
                  
                  <div class="form-group">
                    <label for="page_az">Page (az)</label>
                    <input type="text" name="page_az" class="form-control" id="page_az">
                  </div>

                <div class="form-group">
                  <label for="page_en">Page (en)</label>
                  <input type="text" name="page_en" class="form-control" id="page_en">
                </div>
                <div class="form-group">
                  <label for="page_ru">Page (ru) </label>
                  <input type="text" name="page_ru" class="form-control" id="page_ru" >
                </div>
                
                <div class="form-group">
                    <label for="slug_az">Slug (az)</label>
                    <input type="text" name="slug_az" class="form-control" id="slug_az">
                  </div>

                <div class="form-group">
                  <label for="slug_en">Slug (en)</label>
                  <input type="text" name="slug_en" class="form-control" id="slug_en">
                </div>
                <div class="form-group">
                  <label for="slug_ru">Slug (ru) </label>
                  <input type="text" name="slug_ru" class="form-control" id="slug_ru" >
                </div>

                <div class="form-group">
                    <label for="title_az">Title (az)</label>
                    <input type="text" name="title_az" class="form-control" id="title_az">
                  </div>

                <div class="form-group">
                  <label for="title_en">Title (en)</label>
                  <input type="text" name="title_en" class="form-control" id="title_en">
                </div>
                <div class="form-group">
                  <label for="title_ru">Title (ru) </label>
                  <input type="text" name="title_ru" class="form-control" id="title_ru" >
                </div>

                <div class="form-group">
                    <label for="description_az">Description (az)</label>
                    <textarea name="description_az" id="description_az" class="form-control" rows="4"></textarea>
                   
                  </div>

                <div class="form-group">
                  <label for="description_en">Description (en)</label>
                  <textarea name="description_en" id="description_en" class="form-control" rows="4" ></textarea>
                   
                    </div>
                <div class="form-group">
                  <label for="description_ru">Description (ru) </label>
                  <textarea name="description_ru" id="description_ru" class="form-control" rows="4"></textarea>
                   
                 </div>

                <div class="form-group">
                    <label for="keywords_az">Keyword (az)</label>
                    <input type="text" name="keywords_az" class="form-control" id="keywords_az">
                  </div>

                <div class="form-group">
                  <label for="keywords_en">Keyword (en)</label>
                  <input type="text" name="keywords_en" class="form-control" id="keywords_en">
                </div>
                <div class="form-group">
                  <label for="keywords_ru">Keyword (ru) </label>
                  <input type="text" name="keywords_ru" class="form-control" id="keywords_ru" >
                </div>

                <div class="form-group">
                    <label for="parent_id">Parent id</label>
                    <input type="text" name="parent_id" class="form-control" id="parent_id">
                  </div>
                  <div class="form-group">
                    <label for="page_id">Page id  </label>
                    <input type="text" name="page_id" class="form-control" id="page_id" >
                  </div>

                  <div class="form-group">
                    <label for="view">ViewName  </label>
                    <input type="text" name="viewname" class="form-control" id="view" >
                  </div>
                  <div class="form-group">
                    <label for="route">Route  </label>
                    <input type="text" name="route" class="form-control" id="route" >
                  </div>

                  <div class="form-check"> 
                     <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked="" value="1"  name="on_off"> Ana səhifədə göstərilsin <i class="input-helper"></i>
                     </label>
                 </div>
                 
                 
                <button type="submit" class="btn btn-primary me-2">Submit</button>
           
              </form>
            </div>
          </div>
        </div>

    </div>
</div>
</div>



 

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('back/assets/js/swal.js') }}"></script>

@endsection