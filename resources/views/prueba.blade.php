<div class="col-md-12" style="padding: 10px">
    <form action="{{url('import_tarifas')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" name="file">
        <p style="color:red">{{$errors->first('file')}}</p>
        <input type="submit" value="import" class="btn btn-success">
    </form>
</div>