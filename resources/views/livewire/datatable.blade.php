<div>
    <table class="table table-striped table-responsive">
        <thead>
            <tr>
                @foreach($columns as $column)
                    <th>
                        {{ $column }}
                    </th>
                @endforeach
            </tr>
        </thead>

        <tbody>
            @foreach($this->records() as $record)
                <tr>
                    @foreach ($columns as $column)
                        <td>
                            {{ $record->{$column} }}
                        </td>
                    @endforeach
                </tr>
            @endforeach


        </tbody>
    </table>

    {{ $this->records()->links() }}
</div>
