<?php 

namespace App\Exports;

use App\InspectionRequest;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class RequestExport implements FromQuery, WithHeadings
{
    use Exportable;

    public function __construct($type,$organisation)
    {
        $this->type = $type;
        $this->organisation = $organisation;
       
    }

    public function query()
    {
        $query = InspectionRequest::query()->where('type',$this->type)->where('organisation_id',$this->organisation);
        
        if((int)$this->type === 1){
            return $query->join('organisations','requests.organisation_id','=','organisations.user_id')->select('organisations.name',
                DB::raw("JSON_UNQUOTE(JSON_EXTRACT(`details`, '$.Make')) as Make"),
                DB::raw("JSON_UNQUOTE(JSON_EXTRACT(`details`, '$.Type')) as Vehicle"),
                DB::raw("JSON_UNQUOTE(JSON_EXTRACT(`details`, '$.Year')) as Year"),
                DB::raw("JSON_UNQUOTE(JSON_EXTRACT(`details`, '$.Color')) as Color"),
                DB::raw("JSON_UNQUOTE(JSON_EXTRACT(`details`, '$.State')) as State"),
                DB::raw("JSON_UNQUOTE(JSON_EXTRACT(`details`, '$.Mileage')) as Mileage"),
                DB::raw("JSON_UNQUOTE(JSON_EXTRACT(`details`, '$.capacity')) as Capacity"),
                DB::raw("JSON_UNQUOTE(JSON_EXTRACT(`details`, '$.Registration')) as Registration"),
                DB::raw("JSON_UNQUOTE(JSON_EXTRACT(`details`, '$.Chasis_Number')) as Chasis"),
                DB::raw("JSON_UNQUOTE(JSON_EXTRACT(`details`, '$.Engine_Number')) as Engine"),
                'agreed_inspection_date','agreed_inspection_time','contact_person','contact_phone','requester','requester_email','status');
   
        }

        else if((int)$this->type === 2){
            return $query->join('organisations','requests.organisation_id','=','organisations.user_id')->select('organisations.name',
                DB::raw("JSON_UNQUOTE(JSON_EXTRACT(`details`, '$.property_description')) as Description"),
                DB::raw("JSON_UNQUOTE(JSON_EXTRACT(`details`, '$.property_specification')) as Specification"),
                'agreed_inspection_date','agreed_inspection_time','contact_person','contact_phone','requester','requester_email','status');
   
        
        }
    
    }

    public function headings(): array
    {
        if((int)$this->type === 1){
            return [
                
                'Organisation',
                'Make',
                'Vehicle',
                'Year',
                'Color',
                'State',
                'Mileage',
                'Capacity',
                'Registration',
                'Chasis',
                'Engine',
                'Inspection Date',
                'Inspection Time',
                'Contact Person',
                'Contact Phone',
                'Requester',
                'Requester Email',
                'Status',

            ];

        }

        else if((int)$this->type === 2){

             return [
                'Organisation',
                'Description',
                'Specification',
                'Inspection Date',
                'Inspection Time',
                'Contact Person',
                'Contact Phone',
                'Requester',
                'Requester Email',
                'Status',

            ];

        }


    }
}
