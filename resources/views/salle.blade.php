<x-dashboard>
    <div class="row">
        <div class="col-md-12">
            <div class="table-wrapper">
                
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                            <h2 class="ml-lg-2">Salle</h2>
                        </div>
                        <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                            <a href="#addEmployeeModal" class="btn btn-success btn-add" data-toggle="modal">
                                <i class="material-icons">&#xE147;</i>
                                <span>Ajouter une nouvelle salle</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <!-- <th><span class="custom-checkbox">
                            <input type="checkbox" id="selectAll">
                            <label for="selectAll"></label></th> -->
                            {{-- <th><strong>Département</strong></th> --}}
                            <th style="width: 150px;"><strong>type salle</strong></th>
                            <th style="width: 150px;"><strong>numero</strong></th>
                            {{-- <th><strong>Jour</strong></th> --}}
                            {{-- <th><strong>Matin</strong></th>
                            <th><strong>Après-midi</strong></th> --}}
                            <th style=""><strong>action</strong></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($salles as $salle)
                        <tr>
                            <td>{{ $salle->TypeSalle }}</td>
                            <td>{{ $salle->numero }}</td>
                            {{-- <td>{{ $salle->Matin }}</td>
                            <td>{{ $salle->Après_midi }}</td> --}}
                            <td>
                                    <a href="{{route('salleEsts.edit',$salle->id)}}" class="edit" >
                                        <i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i>
                                    </a>

                                    <a href="#deleteConfirmModal" class="delete" data-toggle="modal" data-id="{{ $salle->id }}">
                                        <i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i>
                                    </a>
                            </td>
                        </tr>
                       

                        @endforeach
                    </tbody>
                </table>
                
                </table>
                
                <div class="clearfix">
                    <div class="hint-text">Affichage de <b>{{$salles->count()}}</b> sur <b>{{$salles->total()}}</b></div>
                    {{$salles->links() }}
                </div>
    
        <!----add-modal start--------->
        <div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajouter une salle disponible</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('salleEsts.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            {{-- <div class="form-group">
                                <label for="Département">Département</label>
                                <select class="form-control" id="cycle"   name="departement" required>
                                    <option value="Informatique">Informatique</option>
                                    <option value="TM">TM</option>
                                    <option value="TACQ">TACQ</option>
                                    <option value="MI">MI</option>
                                </select>
                            </div>  --}}
                            <div class="form-group">
                                <label>Type</label>
                                {{-- <input  type="text" class="form-control" required> --}}
                                <select class="form-control" id="cycle"   name="type" required>
                                    <option value="Amphi">Amphi</option>
                                    <option value="Mini Amphi">Mini Amphi</option>
                                    <option value="Salle">Salle</option>
                                
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Numéro</label>
                                <input name="numero" type="text" class="form-control" required>
                            </div>
                        </div>
                           <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-can" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-success btn-addsalle">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!----add-modal end--------->
        
        <!----edit-modal start--------->
        {{-- <div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modifier une salle</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Type</label>
                           
                            <select class="form-control" id="cycle"   name="type" required>
                                <option value="Amphi">Amphi</option>
                                <option value="Mini Amphi">Mini Amphi</option>
                                <option value="Salle">Salle</option>
                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Numéro</label>
                            <input type="text" class="form-control" required>
                        </div> --}}
    <!--
                     
                   <div class="form-group">
                    <label for="jour">Jour</label>
                    <select class="form-control" id="jour" required>
                      <option value="lundi">Lundi</option>
                      <option value="mardi">Mardi</option>
                      <option value="mercredi">Mercredi</option>
                      <option value="jeudi">Jeudi</option>
                      <option value="vendredi">Vendredi</option>
                      <option value="samedi">Samedi</option>
                    </select>
    
                        <div class="form-group">
                            <label for="Matin">Matin</label>
                            <select class="form-control" id="cycle" required>
                                <option value="Oui">Oui</option>
                                <option value="Non">Non</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Après-midi">Après-midi</label>
                            <select class="form-control" id="cycle" required>
                                <option value="Oui">Oui</option>
                                <option value="Non">Non</option>   
                            </select>
                        </div>  
                    -->
                    {{-- </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-can" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-success btn-addsalle">Sauvegarder</button>
                    </div>
                </div>
            </div>
        </div>
        <!----edit-modal end---------> --}}
        
        <!----delete-modal start--------->
       <!-- Modal de confirmation -->
<div id="deleteConfirmModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">						
                <h4 class="modal-title">Confirmer la suppression</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">					
                <p>Êtes-vous sûr de vouloir supprimer cet enregistrement ?</p>
                <p class="text-warning"><small>Cette action ne peut pas être annulée.</small></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                <form id="deleteForm" action="" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
      <!----delete-modal end--------->
    </div>

    <script>
    $(document).ready(function(){
        $('.delete').on('click', function(){
            var id = $(this).data('id');
            var url = '{{ route("salleEsts.destroy", ":id") }}';
            url = url.replace(':id', id);
            $('#deleteForm').attr('action', url);
        });
    });
</script>

    
</x-dashboard>