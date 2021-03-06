<?php
namespace Mfc\Prometheus\Services\Metrics;

use Mfc\Prometheus\Domain\Repository\TtContentRepository;

class TtContentMetrics extends AbstractMetrics
{
    protected $velocity = 'slow';

    public function getVelocity()
    {
        return parent::getVelocity();
    }

    public function getMetricsValues()
    {
        /** @var \Mfc\Prometheus\Domain\Repository\TtContentRepository $ttContentRepository */
        $ttContentRepository = $this->objectManager->get(TtContentRepository::class);

        return $this->prepareDataToInsert($ttContentRepository->getMetricsValues());
    }
}