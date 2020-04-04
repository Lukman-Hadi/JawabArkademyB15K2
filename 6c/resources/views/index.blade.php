<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAWABAN 6C</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light inverted">
            <a class="navbar-brand" href="#">Arkademy
            </a>
            <div class="col-md-8">
                <form class="form">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
            <button class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">Add New</button>
        </nav>
    </div>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-hoover" id="mytable">
                <thead style= "text-align: center;" class="thead-bg">
                    <th>No</th>
                    <th>Cashier</th>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Action</th>
                </thead>
                <tbody style= "text-align: center;">
                    @foreach ($product as $prod)
                    <tr>
                        <td>{{$prod->id}}</td>
                        <td>{{$prod->nama_c}}</td>
                        <td>{{$prod->nama}}</td>
                        <td>{{$prod->nama_cat}}</td>
                        <td>{{$prod->price}}</td>
                        <td><div class="btn-group btn-group-sm">
                            <form action="{{route('product.destroy',$prod->id)}}" method="POST">
                            <button class="btn btn-sm btn-info open-modal" value="{{$prod->id}}">Edit</button>
                            {{csrf_field()}}
                            {{method_field("DELETE")}}
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
<!-- Modal Add Produk-->
<form action="{{url('product')}}" method="post">
    <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
             {{csrf_field()}}
           <div class="form-group">
               <input type="text" name="product_name" class="form-control" placeholder="Product Name" required>
           </div>
           <div class="form-group">
            <label for="exampleInputPassword1">Cashier</label>
            <select class="form-control" name="id_c">
                    @foreach($product as $produ)
                        <option value="{{ $produ->id_c }}">{{ $produ->nama_c }}</option>
                    @endforeach
            </select>
           </div>
           <div class="form-group">
            <label for="exampleInputPassword1">Category</label>
            <select class="form-control" name="id_cat">
                    @foreach($product as $produ)
                        <option value="{{ $produ->id_cat }}">{{ $produ->nama_cat }}</option>
                    @endforeach
            </select>
           </div>
           <div class="form-group">
               <input type="number" name="price" class="form-control" placeholder="Price" required>
           </div>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-primary">Save</button>
         </div>
       </div>
     </div>
    </div>
 </form> 
 

<script>
    $(document).on('click','.open-modal',function(){
    var id_p= $(this).val();
    var url = "{{route('product.update',"id_p")}}";
    $('#id_p').val(id_p);
        $('#EditModal').modal('show');
});
</script>
{{-- <script>
    $(document).ready(function(){
            //tampilkan data ke modal untuk edit
      $('#mytable').on('click','.edit',function(){
        var product_id = $(this).data('id');
        $('#EditModal').modal('show');
        $('.product_id').val(product_id);
      });
            //tampilkan modal hapus record
            $('#mytable').on('click','.delete',function(){
        var product_id = $(this).data('id');
        $('#DeleteModal').modal('show');
        $('.product_id2').val(product_id);
      });
 
    });
</script>   --}}
</body>
</html>