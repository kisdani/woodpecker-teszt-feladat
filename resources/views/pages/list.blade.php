@extends("main")

@section("content")
    <div class="center-table">
        <table class="table table-striped">
            <tr>
                <th>Name</th>
                <th>Created</th>
                <th>Active</th>
                </th>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                </tr>
            @endforeach
        </table>
        {!! $users->links('partials/pagination') !!}
    </div>

    @if ($added)
        <!-- Modal -->
        <script>
            $(document).ready(function() {
                $('#exampleModal').modal('show');
                $("button[data-dismiss='modal']").click(function (){
                    $('#exampleModal').modal('hide');
                });
            });
        </script>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
                    </div>
                    <div class="modal-body">
                        Successful registration!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection

