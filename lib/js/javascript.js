(function(win,doc){
    'use strict';
    //Show Calendar
    function getCalendar(perfil, div){

    //Variavel para onde irá receber o calendario
    let calendarEl= doc.querySelector(div);
    
    //Variavel que é instancia do "FullCalendar" Instancia de Objeto
    let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar:{ //Objeto
          start:'prev,next, today',
          center: 'title',
          end: 'dayGridMonth, timeGridWeek timeGridDay' 
        },
        buttonText:{ //Troca para pt-br os nomes no fullcalendar
          today:    'Hoje',
          month:    'Mês',
          week:     'Semana',
          day:      'Dia',
          list:     'Lista'
        },
        locale: 'pt-br',
        //Eventos
        dateClick: function(info) {
          if(perfil == 'manager'){
            calendar.changeView('timeGrid',info.dateStr);
          }else{
            if(info.view.type == 'dayGridMonth'){
              calendar.changeView('timeGrid',info.dateStr);
            }else{
              win.location.href='/agendamento/views/user/add.php?date=' + info.dateStr;
            }
          }
          //alert('Clicked on: ' + info.dateStr);
         },
        events: '/agendamento/controllers/ControllerEvents.php',    
        eventClick: function(info){
          if(perfil == 'manager'){

            win.location.href= `/agendamento/views/manager/editar.php?id=${info.event.id}`
          }
          

        }
      });
      //Invocando a instancia e mandando renderizar 
      calendar.render();
            
    }
    //Diferenciar usuarios 
    if(doc.querySelector('.calendarUser')){
      getCalendar('user', '.calendarUser');
    }else if(doc.querySelector('.calendarManager')){
      getCalendar('manager', '.calendarManager');
    }

    if(doc.querySelector('#delete')){
      let btn=doc.querySelector('#delete');
      btn.addEventListener('click', (event)=>{
        event.preventDefault();
        if(confirm("Deseja mesmo apagar esse dado?")){
          win.location.href=event.target.parentNode.href;
        }

      },false);
      
    }

})(window,document);