<?php
/**
 * Auto generated from enums.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * EBluetoothDeviceType enum
 */
final class EBluetoothDeviceType
{
    const k_BluetoothDeviceType_Invalid = 0;
    const k_BluetoothDeviceType_Unknown = 1;
    const k_BluetoothDeviceType_Phone = 2;
    const k_BluetoothDeviceType_Computer = 3;
    const k_BluetoothDeviceType_Headset = 4;
    const k_BluetoothDeviceType_Headphones = 5;
    const k_BluetoothDeviceType_Speakers = 6;
    const k_BluetoothDeviceType_OtherAudio = 7;
    const k_BluetoothDeviceType_Mouse = 8;
    const k_BluetoothDeviceType_Joystick = 9;
    const k_BluetoothDeviceType_Gamepad = 10;
    const k_BluetoothDeviceType_Keyboard = 11;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_BluetoothDeviceType_Invalid' => self::k_BluetoothDeviceType_Invalid,
            'k_BluetoothDeviceType_Unknown' => self::k_BluetoothDeviceType_Unknown,
            'k_BluetoothDeviceType_Phone' => self::k_BluetoothDeviceType_Phone,
            'k_BluetoothDeviceType_Computer' => self::k_BluetoothDeviceType_Computer,
            'k_BluetoothDeviceType_Headset' => self::k_BluetoothDeviceType_Headset,
            'k_BluetoothDeviceType_Headphones' => self::k_BluetoothDeviceType_Headphones,
            'k_BluetoothDeviceType_Speakers' => self::k_BluetoothDeviceType_Speakers,
            'k_BluetoothDeviceType_OtherAudio' => self::k_BluetoothDeviceType_OtherAudio,
            'k_BluetoothDeviceType_Mouse' => self::k_BluetoothDeviceType_Mouse,
            'k_BluetoothDeviceType_Joystick' => self::k_BluetoothDeviceType_Joystick,
            'k_BluetoothDeviceType_Gamepad' => self::k_BluetoothDeviceType_Gamepad,
            'k_BluetoothDeviceType_Keyboard' => self::k_BluetoothDeviceType_Keyboard,
        );
    }
}
}