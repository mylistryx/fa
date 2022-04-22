<?php

declare(strict_types=1);

namespace common\components\FontAwesome\Groups;

use common\components\FontAwesome\Groups\Accessibility\AccessibilityGroup;
use common\components\FontAwesome\Groups\Alert\AlertGroup;
use common\components\FontAwesome\Groups\Alphabet\AlphabetGroup;
use common\components\FontAwesome\Groups\Animals\AnimalsGroup;
use common\components\FontAwesome\Groups\Arrows\ArrowsGroup;
use common\components\FontAwesome\Groups\Astronomy\AstronomyGroup;
use common\components\FontAwesome\Groups\Automotive\AutomotiveGroup;
use common\components\FontAwesome\Groups\Automotive\BuildingsGroup;
use common\components\FontAwesome\Groups\Business\BusinessGroup;
use common\components\FontAwesome\Groups\Camping\CampingGroup;
use common\components\FontAwesome\Groups\Charity\CharityGroup;
use common\components\FontAwesome\Groups\ChartsAndDiagrams\ChartsAndDiagramsGroup;
use common\components\FontAwesome\Groups\Childhood\ChildhoodGroup;
use common\components\FontAwesome\Groups\ClothingAndFashion\ClothingAndFashionGroup;
use common\components\FontAwesome\Groups\Coding\CodingGroup;
use common\components\FontAwesome\Groups\Communication\CommunicationGroup;
use common\components\FontAwesome\Groups\Connectivity\ConnectivityGroup;
use common\components\FontAwesome\Groups\Construction\ConstructionGroup;
use common\components\FontAwesome\Groups\Design\DesignGroup;
use common\components\FontAwesome\Groups\DevicesAndHardware\DevicesAndHardwareGroup;
use common\components\FontAwesome\Groups\DisasterAndCrisis\DisasterAndCrisisGroup;
use common\components\FontAwesome\Groups\Editing\EditingGroup;
use common\components\FontAwesome\Groups\Education\EducationGroup;
use common\components\FontAwesome\Groups\Emoji\EmojiGroup;
use common\components\FontAwesome\Groups\Energy\EnergyGroup;
use common\components\FontAwesome\Groups\Files\FilesGroup;
use common\components\FontAwesome\Groups\FilmAndVideo\FilmAndVideoGroup;
use common\components\FontAwesome\Groups\FoodAndBeverage\FoodAndBeverageGroup;
use common\components\FontAwesome\Groups\FruitsAndVegetables\FruitsAndVegetablesGroup;
use common\components\FontAwesome\Groups\Gaming\GamingGroup;
use common\components\FontAwesome\Groups\Genders\GendersGroup;
use common\components\FontAwesome\Groups\Halloween\HalloweenGroup;
use common\components\FontAwesome\Groups\Hands\HandsGroup;
use common\components\FontAwesome\Groups\Holidays\HolidaysGroup;
use common\components\FontAwesome\Groups\Household\HouseholdGroup;
use common\components\FontAwesome\Groups\Humanitarian\HumanitarianGroup;
use common\components\FontAwesome\Groups\Logistics\LogisticsGroup;
use common\components\FontAwesome\Groups\Maps\MapsGroup;
use common\components\FontAwesome\Groups\Maritime\MaritimeGroup;
use common\components\FontAwesome\Groups\Marketing\MarketingGroup;
use common\components\FontAwesome\Groups\Mathematics\MathematicsGroup;
use common\components\FontAwesome\Groups\MediaPlayback\MediaPlaybackGroup;
use common\components\FontAwesome\Groups\MedicalAndHeath\MedicalAndHeathGroup;
use common\components\FontAwesome\Groups\Money\MoneyGroup;
use common\components\FontAwesome\Groups\Moving\MovingGroup;
use common\components\FontAwesome\Groups\MusicAndAudio\MusicAndAudioGroup;
use common\components\FontAwesome\Groups\Nature\NatureGroup;
use common\components\FontAwesome\Groups\Numbers\NumbersGroup;
use common\components\FontAwesome\Groups\PhotosAndImages\PhotosAndImagesGroup;
use common\components\FontAwesome\Groups\Political\PoliticalGroup;
use common\components\FontAwesome\Groups\PunctuationAndSymbols\PunctuationAndSymbolsGroup;
use common\components\FontAwesome\Groups\Religion\ReligionGroup;
use common\components\FontAwesome\Groups\Science\ScienceGroup;
use common\components\FontAwesome\Groups\ScienceFictions\ScienceFictionGroup;
use common\components\FontAwesome\Groups\Security\SecurityGroup;
use common\components\FontAwesome\Groups\Shapes\ShapesGroup;
use common\components\FontAwesome\Groups\Shopping\ShoppingGroup;
use common\components\FontAwesome\Groups\Social\SocialGroup;
use common\components\FontAwesome\Groups\Spinners\SpinnersGroup;
use common\components\FontAwesome\Groups\SportsAndFitness\SportsAndFitnessGroup;
use common\components\FontAwesome\Groups\TestFormatting\TestFormattingGroup;
use common\components\FontAwesome\Groups\Time\TimeGroup;
use common\components\FontAwesome\Groups\Toggle\ToggleGroup;
use common\components\FontAwesome\Groups\Transportation\TransportationGroup;
use common\components\FontAwesome\Groups\TravelAndHotel\TravelAndHotelGroup;
use common\components\FontAwesome\Groups\UsersAndPeople\UsersAndPeopleGroup;
use common\components\FontAwesome\Groups\Weather\WeatherGroup;
use common\components\FontAwesome\Groups\Writing\WritingGroup;

class FaGroupsList
{
    public const GROUPS = [
        AccessibilityGroup::class         => 'Accessibility',
        AlertGroup::class                 => 'Alert',
        AlphabetGroup::class              => 'Alphabet',
        AnimalsGroup::class               => 'Animals',
        ArrowsGroup::class                => 'Arrows',
        AstronomyGroup::class             => 'Astronomy',
        AutomotiveGroup::class            => 'Automotive',
        BuildingsGroup::class             => 'Buildings',
        BusinessGroup::class              => 'Business',
        CampingGroup::class               => 'Camping',
        CharityGroup::class               => 'Charity',
        ChartsAndDiagramsGroup::class     => 'ChartsAndDiagrams',
        ChildhoodGroup::class             => 'Childhood',
        ClothingAndFashionGroup::class    => 'ClothingAndFashion',
        CodingGroup::class                => 'Coding',
        CommunicationGroup::class         => 'Communication',
        ConnectivityGroup::class          => 'Connectivity',
        ConstructionGroup::class          => 'Construction',
        DesignGroup::class                => 'Design',
        DevicesAndHardwareGroup::class    => 'DevicesAndHardware',
        DisasterAndCrisisGroup::class     => 'DisasterAndCrisis',
        EditingGroup::class               => 'Editing',
        EducationGroup::class             => 'Education',
        EmojiGroup::class                 => 'Emoji',
        EnergyGroup::class                => 'Energy',
        FilesGroup::class                 => 'Files',
        FilmAndVideoGroup::class          => 'FilmAndVideo',
        FoodAndBeverageGroup::class       => 'FoodAndBeverage',
        FruitsAndVegetablesGroup::class   => 'FruitsAndVegetables',
        GamingGroup::class                => 'Gaming',
        GendersGroup::class               => 'Genders',
        HalloweenGroup::class             => 'Halloween',
        HandsGroup::class                 => 'Hands',
        HolidaysGroup::class              => 'Holidays',
        HouseholdGroup::class             => 'Household',
        HumanitarianGroup::class          => 'Humanitarian',
        LogisticsGroup::class             => 'Logistics',
        MapsGroup::class                  => 'Maps',
        MaritimeGroup::class              => 'Maritime',
        MarketingGroup::class             => 'Marketing',
        MathematicsGroup::class           => 'Mathematics',
        MediaPlaybackGroup::class         => 'MediaPlayback',
        MedicalAndHeathGroup::class       => 'MedicalAndHeath',
        MoneyGroup::class                 => 'Money',
        MovingGroup::class                => 'Moving',
        MusicAndAudioGroup::class         => 'MusicAndAudio',
        NatureGroup::class                => 'Nature',
        NumbersGroup::class               => 'Numbers',
        PhotosAndImagesGroup::class       => 'PhotosAndImages',
        PoliticalGroup::class             => 'Political',
        PunctuationAndSymbolsGroup::class => 'PunctuationAndSymbols',
        ReligionGroup::class              => 'Religion',
        ScienceGroup::class               => 'Science',
        ScienceFictionGroup::class        => 'ScienceFiction',
        SecurityGroup::class              => 'Security',
        ShapesGroup::class                => 'Shapes',
        ShoppingGroup::class              => 'Shopping',
        SocialGroup::class                => 'Social',
        SpinnersGroup::class              => 'Spinners',
        SportsAndFitnessGroup::class      => 'SportsAndFitness',
        TestFormattingGroup::class        => 'TestFormatting',
        TimeGroup::class                  => 'Time',
        ToggleGroup::class                => 'Toggle',
        TransportationGroup::class        => 'Transportation',
        TravelAndHotelGroup::class        => 'TravelAndHotel',
        UsersAndPeopleGroup::class        => 'UsersAndPeople',
        WeatherGroup::class               => 'Weather',
        WritingGroup::class               => 'Writing',
    ];

    /**
     * @param string $group
     * @return array
     */
    public static function getIconsFreeList(string $group): array
    {
//        $group = static::GROUPS[$group] ?? [];

        return $group::$iconsFree ?? [];
    }

    /**
     * @param string $group
     * @return array
     */
    public static function getIconsProList(string $group): array
    {
//        $group = static::GROUPS[$group] ?? [];

        return $group::$iconsPro ?? [];
    }

    public static function getIconsAllList(string $group): array
    {
        return array_merge_recursive(static::getIconsFreeList($group), static::getIconsProList($group));
    }
}
