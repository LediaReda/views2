@extends('layout.app')

@section('content')
        <div class="col-12">
          <a href="#" class="btn btn-primary my-3">Add New Post</a>
          <h1 class="p-3 border text-center my-3">All Posts</h1>
        </div> 
        <div class="col-12">
            <table class="table table-borderd">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Writer</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>    
                </thead>
                <tbody>
                   <tr>
                        <td>1</td>
                        <td>First post</td>
                        <td>First Description</td>
                        <td>Ledia reda</td>
                        <td>
                            <a href="" class="btn btn-info">Edit</a>    
                        </td>
                        <td>
                            <form action="" method="post">
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>      
                     </tr>
                </tbody>
            </table> 
        </div> 
    
@endsection

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>