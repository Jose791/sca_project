
{{-- {!! Form::open ([ 'route'=>'asilado.destroy ' , 'method'=>'DELETE']) !!}

                    	{{ csrf_field() }}

                    	<input type="hidden" name="_method" value="DELETE">

                    	<button class="btn btn-danger" type="submit" onclick="return confirm('seguro que desea eliminar?')">Borrar</button>

      {!! Form::Close()!!} --}}



                  
                    	
                    	<form action="{{action('AsiladoController@destroy',$asilado['id'])}}"  method="post">

                    	{{ csrf_field() }}

                    	<input type="hidden" name="_method" value="DELETE">

                    	<button class="btn btn-danger" type="submit" onclick="return confirm('seguro que desea eliminar?')">Borrar</button>

                    	</form>

                 