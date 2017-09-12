<table class="table table-full table-hover">
            <thead>
                <tr>
                    <th>Fecha de prestado</th>
                    <th>Fecha de entregado</th>
                </tr>
            </thead>
            <tbody class="history">
            @foreach($history_records as $his)
                <tr>
                    @php

                        $dt1=new Jenssegers\Date\Date($his->prestado_en);

                    @endphp
                        <td>{{ $dt1->format('d F Y h:i A') }}</td>
                    @php

                            $dt2=new Jenssegers\Date\Date($his->entregado_en);

                        @endphp
                        <td>{{ $dt2->format('d F Y h:i A') }}</td>
                </tr>
               @endforeach
            </tbody>
        </table>