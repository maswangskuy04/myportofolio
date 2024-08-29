@extends('layout.app')

@section('title', 'Data Experience')

@section('content')
    <div class="table-responsive">
        <table class="table app-table-hover mb-0 text-left">
            <thead>
                <tr>
                    <th class="cell">Order</th>
                    <th class="cell">Product</th>
                    <th class="cell">Customer</th>
                    <th class="cell">Date</th>
                    <th class="cell">Status</th>
                    <th class="cell">Total</th>
                    <th class="cell"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="cell">#15346</td>
                    <td class="cell"><span class="truncate">Lorem ipsum dolor sit amet
                            eget volutpat erat</span></td>
                    <td class="cell">John Sanders</td>
                    <td class="cell"><span>17 Oct</span><span class="note">2:16
                            PM</span></td>
                    <td class="cell"><span class="badge bg-success">Paid</span></td>
                    <td class="cell">$259.35</td>
                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                </tr>
                <tr>
                    <td class="cell">#15345</td>
                    <td class="cell"><span class="truncate">Consectetur adipiscing
                            elit</span></td>
                    <td class="cell">Dylan Ambrose</td>
                    <td class="cell"><span class="cell-data">16 Oct</span><span class="note">03:16 AM</span></td>
                    <td class="cell"><span class="badge bg-warning">Pending</span></td>
                    <td class="cell">$96.20</td>
                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                </tr>
                <tr>
                    <td class="cell">#15344</td>
                    <td class="cell"><span class="truncate">Pellentesque diam
                            imperdiet</span></td>
                    <td class="cell">Teresa Holland</td>
                    <td class="cell"><span class="cell-data">16 Oct</span><span class="note">01:16 AM</span></td>
                    <td class="cell"><span class="badge bg-success">Paid</span></td>
                    <td class="cell">$123.00</td>
                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                </tr>

                <tr>
                    <td class="cell">#15343</td>
                    <td class="cell"><span class="truncate">Vestibulum a accumsan lectus
                            sed mollis ipsum</span></td>
                    <td class="cell">Jayden Massey</td>
                    <td class="cell"><span class="cell-data">15 Oct</span><span class="note">8:07 PM</span></td>
                    <td class="cell"><span class="badge bg-success">Paid</span></td>
                    <td class="cell">$199.00</td>
                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                </tr>

                <tr>
                    <td class="cell">#15342</td>
                    <td class="cell"><span class="truncate">Justo feugiat neque</span>
                    </td>
                    <td class="cell">Reina Brooks</td>
                    <td class="cell"><span class="cell-data">12 Oct</span><span class="note">04:23 PM</span></td>
                    <td class="cell"><span class="badge bg-danger">Cancelled</span></td>
                    <td class="cell">$59.00</td>
                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                </tr>

                <tr>
                    <td class="cell">#15341</td>
                    <td class="cell"><span class="truncate">Morbi vulputate lacinia
                            neque et sollicitudin</span></td>
                    <td class="cell">Raymond Atkins</td>
                    <td class="cell"><span class="cell-data">11 Oct</span><span class="note">11:18 AM</span></td>
                    <td class="cell"><span class="badge bg-success">Paid</span></td>
                    <td class="cell">$678.26</td>
                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                </tr>
            </tbody>
        </table>
    </div><!--//table-responsive-->
@endsection
