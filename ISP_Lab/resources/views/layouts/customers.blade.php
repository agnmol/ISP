@extends('mainLayouts.home')


@section('right')
    <div id="contentRight">
        <table id="customers">
            <tr>
                <th>Vardas Pavardė</th>
                <th>Statusas</th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td class = "select">
                    <select>
                        <option value="true">Pageidaujamas</option>
                        <option value="false">Nepageidaujamas</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Berglunds snabbköp</td>
                <td class = "select">
                    <select>
                        <option value="true">Pageidaujamas</option>
                        <option value="false">Nepageidaujamas</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Centro comercial Moctezuma</td>
                <td class = "select">
                    <select>
                        <option value="true">Pageidaujamas</option>
                        <option value="false">Nepageidaujamas</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Ernst Handel</td>
                <td class = "select">
                    <select>
                        <option value="true">Pageidaujamas</option>
                        <option value="false">Nepageidaujamas</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Island Trading</td>
                <td class = "select">
                    <select>
                        <option value="true">Pageidaujamas</option>
                        <option value="false">Nepageidaujamas</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Königlich Essen</td>
                <td class = "select">
                    <select>
                        <option value="true">Pageidaujamas</option>
                        <option value="false">Nepageidaujamas</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Laughing Bacchus Winecellars</td>
                <td class = "select">
                    <select>
                        <option value="true">Pageidaujamas</option>
                        <option value="false">Nepageidaujamas</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Magazzini Alimentari Riuniti</td>
                <td class = "select">
                    <select>
                        <option value="true">Pageidaujamas</option>
                        <option value="false">Nepageidaujamas</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>North/South</td>
                <td class = "select">
                    <select>
                        <option value="true">Pageidaujamas</option>
                        <option value="false">Nepageidaujamas</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Paris spécialités</td>
                <td class = "select">
                    <select>
                        <option value="true">Pageidaujamas</option>
                        <option value="false">Nepageidaujamas</option>
                    </select>
                </td>
            </tr>
        </table>
    </div>
@endsection

