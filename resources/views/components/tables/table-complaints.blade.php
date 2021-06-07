<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" style="border: none;">ID</th>
                <th scope="col" style="border: none;">жалоба рассмотрена</th>
                <th scope="col" style="border: none;">пользователь</th>
                <th scope="col" style="border: none;">публикация</th>
                <th scope="col" style="border: none;">дата публикации</th>
                <th scope="col" style="border: none;">дата обновления</th>
                <th scope="col" style="border: none;"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rows as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>@if ($row->is_checked)
                    <x-bi-check width="24" height="24" color="green" />
                    @else
                    <x-bi-x width="24" height="24" color="red" />
                    @endif</td>
                <td><a
                        href="{{ route('profile.show', ['id'=>$row->user()->first()->id]) }}">{{$row->user()->first()->name . ' ' . $row->user()->first()->surname}}</a>
                </td>
                <td><a class="btn btn-success btn-sm"
                        href="{{ route($publicationsRouteName, ['id'=>$row->publication()->first()->id]) }}">перейти</a>
                </td>
                <td>
                    <x-date date="{{$row->created_at}}" />
                </td>
                <td>
                    <x-date date="{{$row->updated_at}}" />
                </td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                        data-target="{{'#modal' . $row->id}}">
                        Подробнее о жалобе
                    </button>

                    <div class="modal fade" id="{{'modal' . $row->id}}" tabindex="-1"
                        aria-labelledby="{{'modalLabel' . $row->id}}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="{{'modalLabel' . $row->id}}">Жалоба №{{$row->id}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <a
                                        href="{{ route('profile.show', ['id'=>$row->user()->first()->id]) }}">{{$row->user()->first()->name . ' ' . $row->user()->first()->surname}}</a>:
                                    {{$row->description}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="{{ route($publicationsRouteName, ['id'=>$row->publication()->first()->id]) }}"
                                        class="btn btn-primary">Перейти к посту</a>
                                    <form action="{{ route('admin-panel.publication-complaints.check', ['id'=>$row->id]) }}" method="get">
                                        <input type="text" style="display: none;" required name="id" value="{{$row->id}}">
                                        <button type="submit" class="btn btn-success">Жалоба рассмотрена</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
