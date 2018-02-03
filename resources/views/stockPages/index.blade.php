
    <div class="col-md-12" style=" z-index: 0; overflow-y: hidden;">
        <div class="panel panel-default">
            <div class="panel-heading text-center"  style="background-color:#383b3d; color: whitesmoke;"><strong>-: Book List :-</strong></div>
            <div class="panel-body" style="color:#0b054f;">
                 @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="table-responsive">
                <table class="table table-striped table-bordered ">
                    <thead>
                    <tr style="color:#003559;">
                        <th scope="col">Book ID</th>
                        <th scope="col">Book name</th>
                        <th scope="col">Author Name</th>
                        <th scope="col">no of pices</th>
                        <th scope="col">Edition</th>
                        <th scope="col">Publisher Name</th>
                        <th scope="col">Published Year</th>

                        <th scope="col">Catagory</th>
                        <th scope="col">Added By</th>
                        <th scope="col">Created_at </th>
                        <th scope="col">Action </th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($stocks as $stock)
                        <tr class="text-center">
                            <td>{{$stock->book_id}}</td>
                            <td>{{$stock->book_name}}</td>
                            <td>{{$stock->author_name}}</td>
                            <td>{{$stock->no_of_pieces}}</td>
                            <td>{{$stock->edition}}</td>
                            <td>{{$stock->pub_name}}</td>
                            <td>{{$stock->pub_year}}</td>

                            <td>{{$stock->catagory}}</td>
                            <td>{{$stock->user->name}}</td>
                            <td>{{$stock->created_at}}</td>
    {{--  A C T I O N  --}}
                            <td>
                                <div class="row">
                                    {{--EDIT from link and inline javaScrip copied from logout funtion to set an action--}}
                                    <a href="{{route('bookEdit',[$stock->book_id])}}"><button type="submit" class="btn btn-success btn-raised btn-xs">
                                    <i class="fas fa-pencil-alt"></i></button>
                                        </a>

                                    <form class="form" action="{{route('bookDelete',[$stock->book_id])}}" method=post>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-danger btn-raised btn-xs">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            {{--pagination no link--}}
            <div class="row text-center" style="margin-top: -3vh">
                    <ul>
                        {{ $stocks->render() }}
                    </ul>
            </div>
        </div>

    </div>
