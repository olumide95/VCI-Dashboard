
// !function($) {
//     "use strict";

//     var CalendarApp = function() {
//         this.$body = $("body")
//         this.$modal = $('#event-modal'),
//         this.$event = ('#external-events div.external-event'),
//         // this.$calendar = $('#calendar'),
//         this.$saveCategoryBtn = $('.save-category'),
//         this.$categoryForm = $('#add-category form'),
//         this.$extEvents = $('#external-events'),
//         this.$calendarObj = null
//     };


//     /* on drop */
//     CalendarApp.prototype.onDrop = function (eventObj, date) { 
//         var $this = this;
//             // retrieve the dropped element's stored Event Object
//             var originalEventObject = eventObj.data('eventObject');
//             var $categoryClass = eventObj.attr('data-class');
//             // we need to copy it, so that multiple events don't have a reference to the same object
//             var copiedEventObject = $.extend({}, originalEventObject);
//             // assign it the date that was reported
//             copiedEventObject.start = date;
//             if ($categoryClass)
//                 copiedEventObject['className'] = [$categoryClass];
//             // render the event on the calendar
//             $this.$calendar.fullCalendar('renderEvent', copiedEventObject, false);
//             // is the "remove after drop" checkbox checked?
//             if ($('#drop-remove').is(':checked')) {
//                 // if so, remove the element from the "Draggable Events" list
//                 eventObj.remove();
//             }
//     },

//     CalendarApp.prototype.onSelect = function (start, end, allDay) {
//         var $this = this;

//         $this.$calendarObj = $this.$calendar.fullCalendar({
//             slotDuration: '00:15:00', /* If we want to split day time each 15minutes */
//             minTime: '08:00:00',
//             maxTime: '19:00:00',  
//             defaultView: 'month',  
//             handleWindowResize: true,   
//             height: $(window).height() - 200,   
//             header: {
//                 left: 'prev,next today',
//                 center: 'title',
//                 right: 'month,agendaWeek,agendaDay'
//             },
//             events: defaultEvents,
//             editable: true,
//             droppable: true, // this allows things to be dropped onto the calendar !!!
//             eventLimit: true, // allow "more" link when too many events
//             selectable: true,
//             drop: function(date) { $this.onDrop($(this), date); },
//             select: function (start, end, allDay) { $this.onSelect(start, end, allDay); },
//             eventClick: function(calEvent, jsEvent, view) { $this.onEventClick(calEvent, jsEvent, view); }

//         });

//         //on new event
//         this.$saveCategoryBtn.on('click', function(){
//             var categoryName = $this.$categoryForm.find("input[name='category-name']").val();
//             var categoryColor = $this.$categoryForm.find("select[name='category-color']").val();
//             if (categoryName !== null && categoryName.length != 0) {
//                 $this.$extEvents.append('<div class="external-event bg-' + categoryColor + '" data-class="bg-' + categoryColor + '" style="position: relative;"><i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>' + categoryName + '</div>')
//                 $this.enableDrag();
//             }

//         });
//     }
//     /* on click on event */
// //   
// }  
