<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" style="border: none;">ID</th>
                <th scope="col" style="border: none;">заголовок</th>
                <th scope="col" style="border: none;">автор</th>
                <th scope="col" style="border: none;">опубликовано</th>
                <th scope="col" style="border: none;">дата создания</th>
                <th scope="col" style="border: none;">дата публикации</th>
                <th scope="col" style="border: none;"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rows as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->title}}</td>
                <td><a
                        href="{{ route('profile.show', ['id'=>$row->user()->first()->id]) }}">{{$row->user()->first()->name . ' ' . $row->user()->first()->surname}}</a>
                </td>
                <td>
                    @if ($row->is_published)
                    <x-bi-check width="24" height="24" color="green"/>
                    @else
                    <x-bi-x  width="24" height="24" color="red"/>
                    @endif
                </td>
                <td><x-date date="{{$row->created_at}}"/></td>
                <td>@if ($row->published_at) <x-date date="{{$row->published_at}}"/> @endif</td>
                <td>
                    <div class="d-flex justify-content-end">
                        <form action="{{ route($destroyRouteName, ['id'=>$row->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm mr-2" type="submit">удалить</button>
                        </form>
                        <a class="btn btn-primary btn-sm" href="{{ route($publicationsRouteName, ['id'=>$row->id]) }}">перейти</a>
                    </div>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
