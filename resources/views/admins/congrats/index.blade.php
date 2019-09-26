@extends('admins.app')
    <!-- Begin Page Content -->
  @section('content')
    <div class="container">
    <div class="row">
        <div class="col">
            <h1>Congrats</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="1" class="required">Content</th>
                        <th colspan="1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <form method="post" action="{{route('congrats.store')}}" >
                        {{ csrf_field() }}
                        <tr>
                            <td colspan="1">
                                <input class="form-control" name="content" placeholder="required">
                            </td>
                            
                            <td colspan="1">
                                <input type="submit"  value="Add" class="btn btn-primary btn-block btn-h1-spacing" style="width: 100px"> 
                            </td>

                        </tr>
                    </form>
                    @foreach ($congrats as $congrat)
                        <tr>
                            <form method="post" action="{{route('congrats.update',$congrat->id)}}" >
                            @method('PUT')
                            {{ csrf_field() }}
                            <td colspan="1">
                                <input class="form-control" name="content" value="{{ $congrat->content }}" placeholder="required">
                            </td>
                            
                            <td colspan="1">
                                <input type="submit"  value="Update" class="btn btn-primary  btn-h1-spacing" style="margin-bottom: 20px; width: 100px;"> 
                                </form>
                                <form method="post" action="{{route('congrats.destroy',$congrat->id)}}"  >
                                    @method('delete')
                                    {{ csrf_field() }}
                                    <input type="submit"  value="Delete" class="btn btn-danger btn-h1-spacing" style="width: 100px" > 
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <!-- end of .col-md-8 -->
    </div>

@endsection