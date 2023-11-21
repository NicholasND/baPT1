<tbody>
    @foreach($mahasiswa as $item)
    <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->studentID }}</td><td>{{ $item->nama }}</td><td>{{ $item->jurusan }}</td>
    <td>
    <a href="{{ url('/mahasiswa/mahasiswa2/' . $item->id) }}" title="View Mahasiswa2"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
    <a href="{{ url('/mahasiswa/mahasiswa2/' . $item->id . '/edit') }}" title="Edit Mahasiswa2"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
    
    <form method="POST" action="{{ url('/mahasiswa/mahasiswa2' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit" class="btn btn-danger btn-sm" title="Delete Mahasiswa2" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
    </form>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    <div class="pagination-wrapper"> {!! $mahasiswa2->appends(['search' => Request::get('search')])->render() !!} </div>
    </div>
    
    </div>
    </div>
    </div>
    </div>
    </div>
   @endsection