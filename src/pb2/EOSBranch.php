<?php
/**
 * Auto generated from enums.proto at 2023-06-15 07:28:36
 */

namespace SteamAuth\pb2 {
/**
 * EOSBranch enum
 */
final class EOSBranch
{
    const k_EOSBranch_Unknown = 0;
    const k_EOSBranch_Release = 1;
    const k_EOSBranch_ReleaseCandidate = 2;
    const k_EOSBranch_Beta = 3;
    const k_EOSBranch_BetaCandidate = 4;
    const k_EOSBranch_Main = 5;
    const k_EOSBranch_Staging = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'k_EOSBranch_Unknown' => self::k_EOSBranch_Unknown,
            'k_EOSBranch_Release' => self::k_EOSBranch_Release,
            'k_EOSBranch_ReleaseCandidate' => self::k_EOSBranch_ReleaseCandidate,
            'k_EOSBranch_Beta' => self::k_EOSBranch_Beta,
            'k_EOSBranch_BetaCandidate' => self::k_EOSBranch_BetaCandidate,
            'k_EOSBranch_Main' => self::k_EOSBranch_Main,
            'k_EOSBranch_Staging' => self::k_EOSBranch_Staging,
        );
    }
}
}