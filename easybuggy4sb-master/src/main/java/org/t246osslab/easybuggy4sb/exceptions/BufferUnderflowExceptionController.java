package org.t246osslab.easybuggy4sb.exceptions;

import java.nio.ByteBuffer;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class BufferUnderflowExceptionController {

	@RequestMapping(value = "/bue")
	public void process() {
		ByteBuffer.wrap(new byte[]{1}).getDouble();
	}
}