package org.t246osslab.easybuggy4sb.exceptions;

import javax.swing.undo.UndoManager;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class CannotRedoExceptionController {

	@RequestMapping(value = "/cre")
	public void process() {
		new UndoManager().redo();
	}
}