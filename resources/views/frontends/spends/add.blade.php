@extends('frontends.profile-layouts.layout')
@section('content')

<h2>Thêm chi tiêu</h2>

<form action="{{ route('frontend.spend.add') }}" method="POST">
  @csrf
  <input type="hidden" name="date" value="{{ $date }}">
  <div class="form-group">
    <label for="category_id">Danh mục:</label>
    <select class="form-control" id="category_id" name="category_id">
      @foreach($categories as $cat)
      <option value="{{ $cat->id }}">{{ $cat->title . ' ' . ($cat->price_default / 1000) . 'K' }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="price">Giá:</label>
    <input type="text" class="form-control" placeholder="VD: 20000" name="price" value="{{ old('price') }}" id="price">
  </div>
  <div class="form-group">
    <label for="description">Ghi chú:</label>
    <input type="text" class="form-control" placeholder="VD: ăn sáng 1" name="description" value="{{ old('description') }}" id="price_default">
  </div>
  <button type="submit" class="btn btn-primary">Lưu</button>
</form>

@section('scripts')
<script>
  $(document).ready(function(){
    var selectedCat = $( "#category_id option:selected" ).val();
    getCat(selectedCat)
    
    $( "#category_id" ).change(function() {
      selectedCat = $(this).val()
      getCat(selectedCat)
    });

    function getCat(selectedCat) {
      $.ajax({
        url: "{{ route('frontend.ajax.category.spend.getById') }}",
        data: {
          id: selectedCat
        }
      }).done(function(res) {
        if (res.status == 1) {
          $('#price').val(res.data.price_default)
        }
      });
    }
  });
</script>
@stop
    
@endsection