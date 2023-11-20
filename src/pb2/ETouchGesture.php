<?php
/**
 * Auto generated from enums.proto at 2023-11-20 09:10:04
 */

namespace SteamAuth\pb2 {
/**
 * ETouchGesture enum
 */
final class ETouchGesture
{
    const k_ETouchGestureNone = 0;
    const k_ETouchGestureTouch = 1;
    const k_ETouchGestureTap = 2;
    const k_ETouchGestureDoubleTap = 3;
    const k_ETouchGestureShortPress = 4;
    const k_ETouchGestureLongPress = 5;
    const k_ETouchGestureLongTap = 6;
    const k_ETouchGestureTwoFingerTap = 7;
    const k_ETouchGestureTapCancelled = 8;
    const k_ETouchGesturePinchBegin = 9;
    const k_ETouchGesturePinchUpdate = 10;
    const k_ETouchGesturePinchEnd = 11;
    const k_ETouchGestureFlingStart = 12;
    const k_ETouchGestureFlingCancelled = 13;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_ETouchGestureNone' => self::k_ETouchGestureNone,
            'k_ETouchGestureTouch' => self::k_ETouchGestureTouch,
            'k_ETouchGestureTap' => self::k_ETouchGestureTap,
            'k_ETouchGestureDoubleTap' => self::k_ETouchGestureDoubleTap,
            'k_ETouchGestureShortPress' => self::k_ETouchGestureShortPress,
            'k_ETouchGestureLongPress' => self::k_ETouchGestureLongPress,
            'k_ETouchGestureLongTap' => self::k_ETouchGestureLongTap,
            'k_ETouchGestureTwoFingerTap' => self::k_ETouchGestureTwoFingerTap,
            'k_ETouchGestureTapCancelled' => self::k_ETouchGestureTapCancelled,
            'k_ETouchGesturePinchBegin' => self::k_ETouchGesturePinchBegin,
            'k_ETouchGesturePinchUpdate' => self::k_ETouchGesturePinchUpdate,
            'k_ETouchGesturePinchEnd' => self::k_ETouchGesturePinchEnd,
            'k_ETouchGestureFlingStart' => self::k_ETouchGestureFlingStart,
            'k_ETouchGestureFlingCancelled' => self::k_ETouchGestureFlingCancelled,
        );
    }
}
}