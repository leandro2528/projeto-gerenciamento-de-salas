// function atualizarTabela(lista) {
//     document.getElementById("tbody").innerHTML = '';

//     lista.map((cada) => {
//         document.getElementById('tbody').innerHTML +=
//         `
//             <tr>
//                 <td>${document.getElementById('input_nome').value}</td>
//                 <td>${document.getElementById('input_capacidade').value}</td>
//                 <td>${document.getElementById('input_recursos').value}</td>
//                 <td>${document.getElementById('input_classificacao').value}</td>
//             </tr>
//         `;
//     });
// }

function atualizarTabela() {
    var nome = document.getElementById('input_nome').value;
    var capacidade = document.getElementById('input_capacidade').value;
    var recursos = document.getElementById('input_recursos').value;
    var classificacao = document.getElementById('input_classificacao').value;
  
    var tableBody = document.getElementById("tbody");
  
    var newRow = document.createElement('tr');
    newRow.innerHTML = `
      <td>${nome}</td>
      <td>${capacidade}</td>
      <td>${recursos}</td>
      <td>${classificacao}</td>
      <td>
      <button onclick="editar(this)" class="btn btn-sm btn-primary">Edit</button>
      <button onclick="excluir(this)" class="btn btn-sm btn-danger">Delete</button>
      </td>
    `;
    
    tableBody.appendChild(newRow);
  }