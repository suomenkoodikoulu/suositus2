<?php

namespace Survey\SurveyPage\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use Survey\SurveyPage\Api\Data\AnswerInterface;

/**
 * Class File
 * @package Survey\SurveyPage\Model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Answer extends AbstractModel implements AnswerInterface, IdentityInterface
{
    /**
     * Cache tag
     */
    const CACHE_TAG = 'Survey_SurveyPage_answer';

    /**
     * Answer Initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Survey\SurveyPage\Model\ResourceModel\Answer');
    }


    /**
     * Get Title
     *
     * @return string|null
     */
    public function getAnswer1()
    {
        return $this->getData(self::ANSWER1);
    }

    /**
     * Get Content
     *
     * @return string|null
     */
    public function getAnswer2()
    {
        return $this->getData(self::ANSWER2);
    }


    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(self::SURVEY_ID);
    }

    /**
     * Return identities
     * @return string[]
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Set Answer1
     *
     * @param string $answer1
     * @return $this
     */
    public function setAnswer1($answer1)
    {
        return $this->setData(self::ANSWER1, $answer1);
    }

    /**
     * Set Content
     *
     * @param string $content
     * @return $this
     */
    public function setAnswer2($answer2)
    {
        return $this->setData(self::ANSWER2, $answer2);
    }

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setData(self::SURVEY_ID, $id);
    }
}