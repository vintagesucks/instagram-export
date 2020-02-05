<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * QuizSticker.
 *
 * @method int getCorrectAnswer()
 * @method string getEndBackgroundColor()
 * @method bool getFinished()
 * @method string getId()
 * @method string getQuestion()
 * @method string getQuizId()
 * @method string getStartBackgroundColor()
 * @method Tallies[] getTallies()
 * @method string getTextColor()
 * @method int getViewerAnswer()
 * @method bool getViewerCanAnswer()
 * @method bool isCorrectAnswer()
 * @method bool isEndBackgroundColor()
 * @method bool isFinished()
 * @method bool isId()
 * @method bool isQuestion()
 * @method bool isQuizId()
 * @method bool isStartBackgroundColor()
 * @method bool isTallies()
 * @method bool isTextColor()
 * @method bool isViewerAnswer()
 * @method bool isViewerCanAnswer()
 * @method $this setCorrectAnswer(int $value)
 * @method $this setEndBackgroundColor(string $value)
 * @method $this setFinished(bool $value)
 * @method $this setId(string $value)
 * @method $this setQuestion(string $value)
 * @method $this setQuizId(string $value)
 * @method $this setStartBackgroundColor(string $value)
 * @method $this setTallies(Tallies[] $value)
 * @method $this setTextColor(string $value)
 * @method $this setViewerAnswer(int $value)
 * @method $this setViewerCanAnswer(bool $value)
 * @method $this unsetCorrectAnswer()
 * @method $this unsetEndBackgroundColor()
 * @method $this unsetFinished()
 * @method $this unsetId()
 * @method $this unsetQuestion()
 * @method $this unsetQuizId()
 * @method $this unsetStartBackgroundColor()
 * @method $this unsetTallies()
 * @method $this unsetTextColor()
 * @method $this unsetViewerAnswer()
 * @method $this unsetViewerCanAnswer()
 */
class QuizSticker extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'id'                            => 'string',
        'quiz_id'                       => 'string',
        'question'                      => 'string',
        'tallies'                       => 'Tallies[]',
        'correct_answer'                => 'int',
        'viewer_can_answer'             => 'bool',
        'finished'                      => 'bool',
        'text_color'                    => 'string',
        'start_background_color'        => 'string',
        'end_background_color'          => 'string',
        'viewer_answer'                 => 'int',
    ];
}
