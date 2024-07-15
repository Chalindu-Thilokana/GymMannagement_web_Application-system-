





    <div class="table-back">
    
        <table class="table table-striped" id="massagein" style="width: 100%;">
           <caption class="table-title">massage-table
               
           </caption>
           <thead class="table-dark">
               <tr>
                 
                   <th scope="col">Name</th>
                   <th scope="col">Email</th>
                   <th scope="col">Massage</th>
                   
                   
                   <th scope="col">Delete</th>
                  
               </tr>
           </thead>
           <tbody>
            @foreach ($massages as $massag)

            

               <tr>
                <th scope="row">{{$massag->name}}</th>
                <td>{{$massag->email}}</td>
                <th>{{$massag->massage}}</th>
                


                <td>
                    <form action="{{route('massage_delete',$massag->id)}}" method="post">
                    @csrf
                    @method('delete')

                    <button class="btn btn-danger"> delete</button>
                   
                 
                  
                   </form></td>
                   
               </tr>

            @endforeach
           </tbody>
       </table>
   </div>
</div>
</div>

</div>





    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    

    


    <script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
    

   
    <script>
    $( document ).ready(function() {
        new DataTable('#massagein');
     });</script>






       
