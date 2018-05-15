<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>タスク</th>
            <th>ステータス</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <?php $user = $task->user; ?>
            <tr>
                <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                <td>{{ $task->content }}</td>
                <td>{{ $task->status }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

