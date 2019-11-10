@extends('mainLayouts.home')
@include('layouts.restaurant')
@section('right')
    <div id="contentRight">
        <h2 id="pageTitle">1Grupė</h2>
        </table>
        <table id="customers">
            <tr>
                <th>Subgrupė1</th>
                <th>Statusas</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button onclick="window.location='{{ url("jobs/darbopav") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>
            <tr>
                <td>Berglunds snabbköp</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>
            <tr>
                <td>Centro comercial Moctezuma</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>
            <tr>
                <td>Ernst Handel</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>
            <tr>
                <td>Island Trading</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>
            <tr>
                <td>Königlich Essen</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>
            <tr>
                <td>Laughing Bacchus Winecellars</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>
            <tr>
                <td>Magazzini Alimentari Riuniti</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>

        </table>
        <table id="customers">
            <tr>
                <th>Subgrupė2</th>
                <th>Statusas</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button onclick="window.location='{{ url("jobs/darbopav") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>
            <tr>
                <td>Berglunds snabbköp</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>
            <tr>
                <td>Centro comercial Moctezuma</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>
        </table>
        <h2 id="pageTitle">2Grupė</h2>
        </table>
        <table id="customers">
            <tr>
                <th>Subgrupė1</th>
                <th>Statusas</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button onclick="window.location='{{ url("jobs/darbopav") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>
            <tr>
                <td>Berglunds snabbköp</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>
            <tr>
                <td>Centro comercial Moctezuma</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>
            <tr>
                <td>Ernst Handel</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>
            <tr>
                <td>Island Trading</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>
            <tr>
                <td>Königlich Essen</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>
            <tr>
                <td>Laughing Bacchus Winecellars</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>
            <tr>
                <td>Magazzini Alimentari Riuniti</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>

        </table>
        <table id="customers">
            <tr>
                <th>Subgrupė2</th>
                <th>Statusas</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button onclick="window.location='{{ url("jobs/darbopav") }}'" class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>
            <tr>
                <td>Berglunds snabbköp</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>
            <tr>
                <td>Centro comercial Moctezuma</td>
                <td>
                    <select>
                        <option value="true">Aktyvus</option>
                        <option value="false">Neaktyvus</option>
                    </select>
                </td>
                <td><button class="btn">Redaguoti</button></td>
                <td><button class="btn">Naikinti</button></td>
                <td><button class="btn">Užsakyti</button></td>
                <td><button class="btn">Įvertinti</button></td>
            </tr>
        </table>
    </div>
@endsection

