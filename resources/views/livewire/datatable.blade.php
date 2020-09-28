<div>
    <table class="table table-striped">
        <thead>

        </thead>

        <tbody>
            @foreach($this->records() as $record)
                <tr>
                    <td>
                        {{ $record->id}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
