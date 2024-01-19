<x-guest-layout>
    <div style="background: rgba(106,169,108);
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 0px );
    -webkit-backdrop-filter: blur( 0px );
">
        @include('frontend/layouts/inc/nav')

    </div>
    <center>
        <h1>Disease and Solution</h1>
    </center>
    <div class="wrapper table">

       
        <table>
            <thead>
            <tr>
                <th>Disseases</th>
                <th>symptoms</th>
                {{-- <th>control</th> --}}
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>James</td>
                <td>Matman</td>
                {{-- <td>Chief Sandwich Eater</td> --}}
            </tr>
            <tr>
                <td>The</td>
                <td>Tick</td>
                {{-- <td>Crimefighter Sorta</td> --}}
            </tr>
            </tbody>
        </table>
    </div>
        
    </x-guest-layout>