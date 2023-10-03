@extends('layout/main')
@section('contenu')
    <div class="container">
        <h1>Mobiletic</h1>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th rowspan="2"></th>
                    <th rowspan="2" style="text-align: center;padding: 25px;background: gray;color: white">Total anomalies
                    </th>
                    <th colspan="2" style="background: gray;color: white">Bugs</th>
                    <th colspan="2" style="background: gray;color: white">Améliorations</th>
                </tr>
                <tr>
                    <th style="background: red">En Cours</th>
                    <th style="background: yellowgreen">Résolu</th>
                    <th style="background: yellow">En Cours</th>
                    <th style="background: yellowgreen">Resolu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="background: gray;color: white"><strong>Projet A</strong></td>
                    <td style="background: gray;color: white;text-align: center">{{ $projectCounts['Projet 2 CLI'] }}</td>
                    <td style="background: red">
                        @if (isset($bugsencour[0][0]))
                            <strong>{{ $bugsencour[0][0]->BUGSE }}</strong>
                        @endif
                    </td>
                    <td style="background: yellowgreen">
                        @if (isset($bugseresolu[0][0]))
                            <strong>{{ $bugseresolu[0][0]->BUGSE }}</strong>
                        @endif
                    </td>
                    <td style="background: yellow">
                        @if (isset($amlencour[0][0]))
                            <strong>{{ $amlencour[0][0]->aml }}</strong>
                        @endif
                    </td>
                    <td style="background: yellowgreen">
                        @if (isset($amlresolu[0][0]))
                            <strong>{{ $amlresolu[0][0]->aml }}</strong>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="background: gray;color: white"><strong>Projet B</strong></td>
                    <td style="background: gray;color: white;text-align: center">{{ $projectCounts['Projet 1 CLI'] }}</td>
                    <td style="background: red">
                        @if (isset($bugsencour[1][0]))
                            <strong>{{ $bugsencour[1][0]->BUGSE }}</strong>
                        @endif
                    </td>
                    <td style="background: yellowgreen">
                        @if (isset($bugseresolu[1][0]))
                            <strong>{{ $bugseresolu[1][0]->BUGSE }}</strong>
                        @endif
                    </td>
                    <td style="background: yellow">
                        @if (isset($amlencour[1][0]))
                            <strong>{{ $amlencour[1][0]->aml }}</strong>
                        @endif
                    </td>
                    <td style="background: yellowgreen">
                        @if (isset($amlresolu[1][0]))
                            <strong>{{ $amlresolu[1][0]->aml }}</strong>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="background: gray;color: white"><strong>Projet C</strong></td>
                    <td style="background: gray;color: white;text-align: center">{{ $projectCounts['Projet 3 CLI'] }}</td>
                    <td style="background: red">
                        @if (isset($bugsencour[2][0]))
                            <strong>{{ $bugsencour[2][0]->BUGSE }}</strong>
                        @endif
                    </td>
                    <td style="background: yellowgreen">
                        @if (isset($bugseresolu[2][0]))
                            <strong>{{ $bugseresolu[2][0]->BUGSE }}</strong>
                        @endif
                    </td>
                    <td style="background: yellow">
                        @if (isset($amlencour[2][0]))
                            <strong>{{ $amlencour[2][0]->aml }}</strong>
                        @endif
                    </td>
                    <td style="background: yellowgreen">
                        @if (isset($amlresolu[2][0]))
                            <strong>{{ $amlresolu[2][0]->aml }}</strong>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
