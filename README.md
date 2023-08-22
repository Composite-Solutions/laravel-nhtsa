# Laravel NHTSA API wrapper

## Installation
```bash
composer require composite/laravel-nhtsa
```

In Laravel 5.5 or above the service provider will automatically get registered. In older versions of the framework just add the service provider in `config/app.php` file:
```php
'providers' => [
    ...
    /*
     * Package Service Providers...
     */
    Composite\LaravelNhtsa\VinServiceProvider::class,
    ...
],

'aliases' => [
    ...
    'nhtsa' => Composite\LaravelNhtsa\Facades\Nhtsa::class,
    ...
],
```

## Usage
```php
use Composite\LaravelNhtsa\Facades\Nhtsa;

// find by VIN
Nhtsa::vinDecodeService()->find('WBA3A5C51CF256987');

```

### Return object structure
```json
{
  "Count": 1,
  "Message": "Results returned successfully. NOTE: Any missing decoded values should be interpreted as NHTSA does not have data on the specific variable. Missing value should NOT be interpreted as an indication that a feature or technology is unavailable for a vehicle.",
  "SearchCriteria": "VIN(s): WBA3A5C51CF256987",
  "Results": [
    {
      "ABS": "",
      "ActiveSafetySysNote": "",
      "AdaptiveCruiseControl": "",
      "AdaptiveDrivingBeam": "",
      "AdaptiveHeadlights": "",
      "AdditionalErrorText": "",
      "AirBagLocCurtain": "",
      "AirBagLocFront": "1st Row (Driver and Passenger)",
      "AirBagLocKnee": "1st Row (Driver and Passenger)",
      "AirBagLocSeatCushion": "",
      "AirBagLocSide": "1st Row (Driver and Passenger)",
      "AutoReverseSystem": "",
      "AutomaticPedestrianAlertingSound": "",
      "AxleConfiguration": "",
      "Axles": "",
      "BasePrice": "",
      "BatteryA": "",
      "BatteryA_to": "",
      "BatteryCells": "",
      "BatteryInfo": "",
      "BatteryKWh": "",
      "BatteryKWh_to": "",
      "BatteryModules": "",
      "BatteryPacks": "",
      "BatteryType": "",
      "BatteryV": "",
      "BatteryV_to": "",
      "BedLengthIN": "",
      "BedType": "Not Applicable",
      "BlindSpotIntervention": "",
      "BlindSpotMon": "",
      "BodyCabType": "Not Applicable",
      "BodyClass": "Sedan\/Saloon",
      "BrakeSystemDesc": "",
      "BrakeSystemType": "",
      "BusFloorConfigType": "Not Applicable",
      "BusLength": "",
      "BusType": "Not Applicable",
      "CAN_AACN": "",
      "CIB": "",
      "CashForClunkers": "",
      "ChargerLevel": "",
      "ChargerPowerKW": "",
      "CoolingType": "",
      "CurbWeightLB": "",
      "CustomMotorcycleType": "Not Applicable",
      "DaytimeRunningLight": "",
      "DestinationMarket": "",
      "DisplacementCC": "2000.00",
      "DisplacementCI": "121.8",
      "DisplacementL": "2.00",
      "Doors": "4",
      "DriveType": "",
      "DriverAssist": "",
      "DynamicBrakeSupport": "",
      "EDR": "",
      "ESC": "",
      "EVDriveUnit": "",
      "ElectrificationLevel": "",
      "EngineConfiguration": "",
      "EngineCycles": "",
      "EngineCylinders": "4",
      "EngineHP": "241",
      "EngineHP_to": "",
      "EngineKW": "179.7137",
      "EngineManufacturer": "",
      "EngineModel": "",
      "EntertainmentSystem": "",
      "ErrorCode": "1",
      "ErrorText": "1 - Check Digit (9th position) does not calculate properly",
      "ForwardCollisionWarning": "",
      "FuelInjectionType": "",
      "FuelTypePrimary": "Gasoline",
      "FuelTypeSecondary": "",
      "GCWR": "",
      "GCWR_to": "",
      "GVWR": "",
      "GVWR_to": "",
      "KeylessIgnition": "",
      "LaneCenteringAssistance": "",
      "LaneDepartureWarning": "",
      "LaneKeepSystem": "",
      "LowerBeamHeadlampLightSource": "",
      "Make": "BMW",
      "MakeID": "452",
      "Manufacturer": "BMW AG",
      "ManufacturerId": "966",
      "Model": "328i",
      "ModelID": "1709",
      "ModelYear": "2012",
      "MotorcycleChassisType": "Not Applicable",
      "MotorcycleSuspensionType": "Not Applicable",
      "NCSABodyType": "",
      "NCSAMake": "",
      "NCSAMapExcApprovedBy": "",
      "NCSAMapExcApprovedOn": "",
      "NCSAMappingException": "",
      "NCSAModel": "",
      "NCSANote": "",
      "NonLandUse": "",
      "Note": "",
      "OtherBusInfo": "",
      "OtherEngineInfo": "",
      "OtherMotorcycleInfo": "",
      "OtherRestraintSystemInfo": "Head inflatable restraint for driver, front passenger, rear outboard driver-side, and rear outboard passenger-side. Pretensioners for driver and front passenger.",
      "OtherTrailerInfo": "",
      "ParkAssist": "",
      "PedestrianAutomaticEmergencyBraking": "",
      "PlantCity": "MUNICH",
      "PlantCompanyName": "",
      "PlantCountry": "GERMANY",
      "PlantState": "",
      "PossibleValues": "",
      "Pretensioner": "Yes",
      "RearAutomaticEmergencyBraking": "",
      "RearCrossTrafficAlert": "",
      "RearVisibilitySystem": "",
      "SAEAutomationLevel": "",
      "SAEAutomationLevel_to": "",
      "SeatBeltsAll": "Manual",
      "SeatRows": "",
      "Seats": "",
      "SemiautomaticHeadlampBeamSwitching": "",
      "Series": "3-Series",
      "Series2": "",
      "SteeringLocation": "",
      "SuggestedVIN": "",
      "TPMS": "Direct",
      "TopSpeedMPH": "",
      "TrackWidth": "",
      "TractionControl": "",
      "TrailerBodyType": "Not Applicable",
      "TrailerLength": "",
      "TrailerType": "Not Applicable",
      "TransmissionSpeeds": "",
      "TransmissionStyle": "",
      "Trim": "",
      "Trim2": "",
      "Turbo": "",
      "VIN": "WBA3A5C51CF256987",
      "ValveTrainDesign": "",
      "VehicleDescriptor": "WBA3A5C5*CF",
      "VehicleType": "PASSENGER CAR",
      "WheelBaseLong": "",
      "WheelBaseShort": "",
      "WheelBaseType": "",
      "WheelSizeFront": "",
      "WheelSizeRear": "",
      "Wheels": "",
      "Windows": ""
    }
  ]
}
```
## TODO
- [ ] Add more endpoints

## Credits
- [Composite Solutions Hungary Kft.](https://composite-solutions.eu)

## License
The MIT License (MIT). Please see [License File](LICENSE) for more information.
