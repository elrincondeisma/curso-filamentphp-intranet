<?php

namespace App\Filament\Personal\Widgets;

use App\Models\Timesheet;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Support\Facades\Auth;

class TimesheetChart extends ChartWidget
{
    protected static ?string $heading = 'Timesheet Chart';
    public ?string $filter = 'today';
    protected function getFilters(): ?array
    {
        return [
            'today' => 'Today',
            'week' => 'Last week',
            'month' => 'Last month',
            'year' => 'This year',
        ];
    }
    public function getDescription(): ?string
    {
        return 'El número de días trabajados';
    }
    protected function getData(): array
    {
        $activeFilter = $this->filter;

        $data = Trend::query(Timesheet::where('user_id',Auth::user()->id)->where('type','work')->distinct('day_in'))
            ->dateColumn('day_in')
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Timesheets',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),

                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
