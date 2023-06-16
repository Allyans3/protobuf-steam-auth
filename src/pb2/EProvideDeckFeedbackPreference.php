<?php
/**
 * Auto generated from enums.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * EProvideDeckFeedbackPreference enum
 */
final class EProvideDeckFeedbackPreference
{
    const k_EProvideDeckFeedbackPreference_Unset = 0;
    const k_EProvideDeckFeedbackPreference_Yes = 1;
    const k_EProvideDeckFeedbackPreference_No = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EProvideDeckFeedbackPreference_Unset' => self::k_EProvideDeckFeedbackPreference_Unset,
            'k_EProvideDeckFeedbackPreference_Yes' => self::k_EProvideDeckFeedbackPreference_Yes,
            'k_EProvideDeckFeedbackPreference_No' => self::k_EProvideDeckFeedbackPreference_No,
        );
    }
}
}