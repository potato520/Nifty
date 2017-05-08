@if(session('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="pci-cross pci-circle"></i></button>
        提示消息!
        <p>{{ session('success') }}</p>
    </div>
@endif

@if($errors->any())
    <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="pci-cross pci-circle"></i></button>

        错误提示!
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif