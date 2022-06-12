<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User List') }}</div>

                <div class="card-body">
                    <table>
                        <tr>
                            <th>Email</th>
                        </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                {{ $user->email }}
                            </td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>