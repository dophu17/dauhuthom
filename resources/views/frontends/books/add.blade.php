@extends('frontends.profile-layouts.layout')
@section('content')

@section('css')
<style>
  #author-name-autocomplete-list {
    border: 1px solid #ced4da;
    padding: 5px;
    border-radius: .25rem;
    display: none;
    z-index: 2;
    height: 150px;
    overflow-y: scroll;
  }
  #author-name-autocomplete-list p {
    margin-bottom: 5px;
  }
  #author-name-autocomplete-list p:hover {
    background-color: #ced4da;
    cursor: pointer;
  }
</style>
@stop

<h2>Thêm sách mới</h2>

<form action="{{ route('frontend.book.add') }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">Tên sách:</label>
    <input type="text" class="form-control" placeholder="VD: Nhà giả kim" name="name" value="{{ old('name') }}" id="name">
    @if($errors->first('name'))
    <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif
  </div>
  <div class="form-group">
    <label for="price">Giá:</label>
    <input type="text" class="form-control" placeholder="VD: 50000" name="price" value="{{ old('price') }}" id="price">
  </div>
  <div class="form-group">
    <label for="author_name">Tác giả:</label>
    <input type="text" class="form-control" placeholder="Tên tác giả" name="author_name" value="{{ old('author_name') }}" id="author_name">
    <div id="author-name-autocomplete-list">
      <!-- data -->
    </div>
  </div>
  <div class="form-group">
    <label for="read_start_date">Ngày bắt đầu:</label>
    <input type="text" class="form-control" placeholder="Ngày bắt đầu đọc" name="read_start_date" value="{{ old('read_start_date') }}" id="read_start_date">
  </div>
  <div class="form-group">
    <label for="read_end_date">Ngày kết thúc:</label>
    <input type="text" class="form-control" placeholder="Ngày đọc xong" name="read_end_date" value="{{ old('read_end_date') }}" id="read_end_date">
  </div>
  <div class="form-group">
    <input id="status" type="checkbox" value="1" name="status">
    <label for="status">Trạng thái đã đọc</label>
  </div>
  <button type="submit" class="btn btn-primary">Lưu</button>
</form>

@section('scripts')
<script>
  $(document).ready(function(){
    $( "#author_name" ).keyup(function(e) {
      $.ajax({
        url: "{{ route('frontend.ajax.author.searchByKeyAjax') }}",
        dataType: "json",
        data: {
          key: $(this).val()
        },
        success: function( res ) {
          if (res.data.length > 0) {
            $('#author-name-autocomplete-list').empty()
            $.each(res.data, function( index, value ) {
              $('#author-name-autocomplete-list').append('<p class="autocomplete-item">' + value.name + '</p>')
            });
            $('#author-name-autocomplete-list').show();
    
            $(".autocomplete-item").on('click', function() {
              $('#author_name').val($(this).html())
              $('#author-name-autocomplete-list').hide()
            });
          } else {
            $('#author-name-autocomplete-list').hide();
          }
        }
      });
    });
  });
</script>
@stop
    
@endsection